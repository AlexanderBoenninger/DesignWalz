<?php

return function ($site, $pages, $page) {

$join = $pages->find('join');
$survey = $pages->find('survey');
$about = $pages->find('about');
$support = $pages->find('support');
$contact = $pages->find('contact');

   return [
    'join' => $join,
    'survey' => $survey,
    'about' => $about,
    'support' => $support,
    'contact' => $contact
  ];
};
