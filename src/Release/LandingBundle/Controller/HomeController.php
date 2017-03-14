<?php

namespace Release\LandingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

use Release\LandingBundle\Entity\Recruitment;
use Discutea\DForumBundle\Entity\Topic;
use Discutea\DForumBundle\Entity\Post;

class HomeController extends Controller
{
    public function indexAction()
    {
        return $this->render('ReleaseLandingBundle:Home:landing.html.twig');
    }

    public function teamAction()
    {
        return $this->render('ReleaseLandingBundle:Home:team.html.twig');
    }
	
	public function recruitmentAction(Request $request)
    {
		$auth_checker = $this->get('security.authorization_checker');
		
		// User not logged in
		if (!$auth_checker->isGranted('ROLE_MODERATOR'))
			return $this->redirectToRoute('fos_user_security_login');
		
		// User logged in
		$recruitment = new Recruitment();
		
		$form = $this->createFormBuilder($recruitment)
			->add('character_name',TextType::class,array('required' => true))
			->add('first_name',TextType::class,array('required' => true))
			->add('age',NumberType::class,array('required' => true))
			->add('gender',TextType::class,array('required' => true))
			->add('interests',TextType::class,array('required' => true))
			->add('availability',TextType::class,array('required' => true))
			->add('description',TextType::class,array('required' => true))
			->add('lodestone',TextType::class,array('required' => true))
			->add('jobs',TextType::class,array('required' => true))
			->add('gameplay',TextType::class,array('required' => true))
			->add('bis_gear',TextType::class,array('required' => true))
			->add('current_gear',TextType::class,array('required' => true))
			->add('experience_games',TextType::class,array('required' => true))
			->add('experience_ffxiv',TextType::class,array('required' => true))
			->add('previous_guilds',TextType::class,array('required' => true))
			->add('motivation',TextType::class,array('required' => true))
			->add('postuler', SubmitType::class, array('label' => 'Postuler', 'attr' => array('class' => 'btn waves-effect waves-light')))
			->getForm();
		
		// Form processing
		$form->handleRequest($request);
		
		// Form submitted and valid
		if ($form->isSubmitted() && $form->isValid()) {
			$recruitment = $form->getData();
			
			return $this->createRecruitmentPost($recruitment);
		}
		// Form not submitted or invalid
		else
			return $this->render('ReleaseLandingBundle:Home:recruitment.html.twig', array('form' => $form->createView()));
    }
	
	protected function createRecruitmentPost($recruitment)
	{
		$auth_checker = $this->get('security.authorization_checker');
		
		// User not logged in
		if (!$auth_checker->isGranted('ROLE_MODERATOR'))
			return $this->redirectToRoute('fos_user_security_login');
		else if ($auth_checker->isGranted('IS_AUTHENTICATED_REMEMBERED')) 
		{
			$user = $this->get('security.token_storage')->getToken()->getUser();
			$em = $this->getDoctrine()->getManager();
			$forum = $em->getRepository('DForumBundle:Forum')->findOneBySlug('recrutement');
			
			// Topic creation
			$topic = new Topic();
			$topic->setForum($forum);
			$topic->setTitle($recruitment->getCharacterName());
			$topic->setUser($user);

			
			// Post creation
			$post = new Post();
			$post->setContent($this->render('ReleaseLandingBundle:Home:recruitInfo.html.twig', array('recruitment' => $recruitment))->getContent());
			$post->setTopic($topic);
			$post->setPoster($topic->getUser());
			
			$topic->addPost($post);
			
			$em->persist($topic);
			$em->persist($post);
			$em->flush();
			$topic = $em->getRepository('DForumBundle:Topic')->findOneById($topic->getId());
			$slug = $topic->getSlug();
			$em->flush();
			
			return $this->redirect( $this->generateUrl('discutea_forum_post', array( 'slug' => $slug))); 
		}
	}
}
