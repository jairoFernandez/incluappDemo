<?php

namespace Admin\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Admin\AdminBundle\Entity\TipoExperiencia;
use Admin\AdminBundle\Form\TipoExperienciaType;

/**
 * TipoExperiencia controller.
 *
 */
class TipoExperienciaController extends Controller
{

    /**
     * Lists all TipoExperiencia entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AdminBundle:TipoExperiencia')->findAll();

        return $this->render('AdminBundle:TipoExperiencia:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new TipoExperiencia entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new TipoExperiencia();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tipoexperiencia_show', array('id' => $entity->getId())));
        }

        return $this->render('AdminBundle:TipoExperiencia:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a TipoExperiencia entity.
     *
     * @param TipoExperiencia $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(TipoExperiencia $entity)
    {
        $form = $this->createForm(new TipoExperienciaType(), $entity, array(
            'action' => $this->generateUrl('tipoexperiencia_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new TipoExperiencia entity.
     *
     */
    public function newAction()
    {
        $entity = new TipoExperiencia();
        $form   = $this->createCreateForm($entity);

        return $this->render('AdminBundle:TipoExperiencia:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TipoExperiencia entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminBundle:TipoExperiencia')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoExperiencia entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AdminBundle:TipoExperiencia:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TipoExperiencia entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminBundle:TipoExperiencia')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoExperiencia entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AdminBundle:TipoExperiencia:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a TipoExperiencia entity.
    *
    * @param TipoExperiencia $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(TipoExperiencia $entity)
    {
        $form = $this->createForm(new TipoExperienciaType(), $entity, array(
            'action' => $this->generateUrl('tipoexperiencia_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing TipoExperiencia entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AdminBundle:TipoExperiencia')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TipoExperiencia entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('tipoexperiencia_edit', array('id' => $id)));
        }

        return $this->render('AdminBundle:TipoExperiencia:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a TipoExperiencia entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AdminBundle:TipoExperiencia')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TipoExperiencia entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tipoexperiencia'));
    }

    /**
     * Creates a form to delete a TipoExperiencia entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tipoexperiencia_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
