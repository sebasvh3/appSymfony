<?php

namespace inventario\appBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use inventario\appBundle\Entity\Transaccion;
use inventario\appBundle\Form\TransaccionType;

/**
 * Transaccion controller.
 *
 */
class TransaccionController extends Controller
{

    /**
     * Lists all Transaccion entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('appBundle:Transaccion')->findAll();

        return $this->render('appBundle:Transaccion:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new Transaccion entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new Transaccion();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('transaccion_show', array('id' => $entity->getId())));
        }

        return $this->render('appBundle:Transaccion:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Transaccion entity.
     *
     * @param Transaccion $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Transaccion $entity)
    {
        $form = $this->createForm(new TransaccionType(), $entity, array(
            'action' => $this->generateUrl('transaccion_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new Transaccion entity.
     *
     */
    public function newAction()
    {
        $entity = new Transaccion();
        $form   = $this->createCreateForm($entity);

        return $this->render('appBundle:Transaccion:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Transaccion entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('appBundle:Transaccion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Transaccion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('appBundle:Transaccion:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Transaccion entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('appBundle:Transaccion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Transaccion entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('appBundle:Transaccion:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a Transaccion entity.
    *
    * @param Transaccion $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Transaccion $entity)
    {
        $form = $this->createForm(new TransaccionType(), $entity, array(
            'action' => $this->generateUrl('transaccion_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing Transaccion entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('appBundle:Transaccion')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Transaccion entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('transaccion_edit', array('id' => $id)));
        }

        return $this->render('appBundle:Transaccion:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a Transaccion entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('appBundle:Transaccion')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Transaccion entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('transaccion'));
    }

    /**
     * Creates a form to delete a Transaccion entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('transaccion_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
