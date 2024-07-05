<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class FortuneController extends AbstractController
{
    #[Route('/', name: 'app_fortune')]
    public function index(): Response
    {
        $fortunes = [
            "Do not be afraid of competition.",
            "An exciting opportunity lies ahead of you.",
            "You love peace.",
            "Get your mind set…confidence will lead you on.",
            "You will always be surrounded by true friends.",
            "Sell your ideas-they have exceptional merit.",
            "You should be able to undertake and complete anything.",
            "You are kind and friendly.",
            "You are wise beyond your years.",
            "Your ability to juggle many tasks will take you far.",
            "A routine task will turn into an enchanting adventure.",
            "Beware of all enterprises that require new clothes.",
            "Be true to your work, your word, and your friend.",
            "Goodness is the only investment that never fails.",
            "A journey of a thousand miles begins with a single step.",
            "Forget injuries; never forget kindnesses.",
            "Respect yourself and others will respect you.",
            "A man cannot be comfortable without his own approval.",
            "Always do right. This will gratify some people and astonish the rest.",
            "It is easier to stay out than to get out.",
        ];
        $saying = $fortunes[array_rand($fortunes)];

        return $this->render('fortune/index.html.twig', [
            'saying' => $saying,
        ]);
    }
}
