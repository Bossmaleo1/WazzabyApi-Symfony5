<?php

namespace App\DataFixtures;

use App\Entity\CategoryProblematic;
use App\Entity\Problematic;
use App\Entity\PublicMessage;
use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class AppFixtures extends Fixture
{
    /**
     * @var UserPasswordEncoderInterface
     */
    private $passwordEncoder;

    public function __construct(UserPasswordEncoderInterface $passwordEncoder) {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        /*$this->loadCategoryProblematic($manager);
        $this->loadProblematic($manager);*/
        //$this->loadProblematic($manager);
        //$manager->flush();

        $this->loadUsers($manager);
    }




    public function loadPublicMessagePicture(ObjectManager $manager) {
        $publicMessage = new PublicMessage();
        //$publicMessage->
    }

    public function loadPublicMessage(ObjectManager $manager) {
        $publicMessage = new PublicMessage();
        //$publicMessage->
    }

    public function loadUsers(ObjectManager $manager) {
        $user = new User();
        $user->setFirstname("Sidney");
        $user->setLastname("MALEO");
        $user->setBirthday(new \DateTime('1993-10-13 12:00:00'));
        $user->setSex('M');
        $user->setEmail("sidneymaleoregis@gmail.com");
        $user->setLang("fr");
        $user->setState("1");
        $user->setCountry("Congo");
        $user->setTown("Brazzaville");
        $user->setOnline("1");
        $user->setActive("1");
        $user->setActivationCode("1234");
        $user->setKeyPush("EDF7845445GT454dfgh1455hj4yuu4");
        $user->setTokenUser("4558rtttrtrtr");
        $user->setPhoto("maleo.png");
        $user->setPassword("Filstel1993");

        $manager->persist($user);
        $manager->flush();

    }





    public function loadProblematic(ObjectManager $manager) {
        $categoryProblematicReligionFr = $this->getReference("category_religion_fr");
        $categoryProblematicReligionEn = $this->getReference("category_religion_en");


        $problematicReligionFr = new Problematic();
        $problematicReligionFr->setWording("Christianisme");
        $problematicReligionFr->setLanguage("fr");
        $problematicReligionFr->setCategory($categoryProblematicReligionFr);
        $problematicReligionFr->setIcon("");

        $manager->persist($problematicReligionFr);


        $problematicReligionFr = new Problematic();
        $problematicReligionFr->setWording("Christianity");
        $problematicReligionFr->setLanguage("en");
        $problematicReligionFr->setCategory($categoryProblematicReligionEn);
        $problematicReligionFr->setIcon("");

        $manager->persist($problematicReligionFr);

        $problematicReligionFr = new Problematic();
        $problematicReligionFr->setWording("Buddhism");
        $problematicReligionFr->setLanguage("en");
        $problematicReligionFr->setCategory($categoryProblematicReligionEn);
        $problematicReligionFr->setIcon("");

        $manager->persist($problematicReligionFr);

        $problematicReligionFr = new Problematic();
        $problematicReligionFr->setWording("Bouddhisme");
        $problematicReligionFr->setLanguage("fr");
        $problematicReligionFr->setCategory($categoryProblematicReligionFr);
        $problematicReligionFr->setIcon("");

        $manager->persist($problematicReligionFr);

        /*$problematicReligionFr = new Problematic();
        $problematicReligionFr->setWording("Christianisme");
        $problematicReligionFr->setLanguage("fr");
        $problematicReligionFr->setIcon("");

        $problematicReligionFr = new Problematic();
        $problematicReligionFr->setWording("Christianisme");
        $problematicReligionFr->setLanguage("fr");
        $problematicReligionFr->setIcon("");*/

        $problematicReligionFr = new Problematic();
        $problematicReligionFr->setWording("Judaïsme");
        $problematicReligionFr->setLanguage("fr");
        $problematicReligionFr->setCategory($categoryProblematicReligionFr);
        $problematicReligionFr->setIcon("");

        $manager->persist($problematicReligionFr);

        $problematicReligionFr = new Problematic();
        $problematicReligionFr->setWording("Judaism");
        $problematicReligionFr->setLanguage("en");
        $problematicReligionFr->setCategory($categoryProblematicReligionEn);
        $problematicReligionFr->setIcon("");

        $manager->persist($problematicReligionFr);

        $problematicReligionFr = new Problematic();
        $problematicReligionFr->setWording("Hindouisme");
        $problematicReligionFr->setLanguage("fr");
        $problematicReligionFr->setCategory($categoryProblematicReligionFr);
        $problematicReligionFr->setIcon("");

        $manager->persist($problematicReligionFr);

        $problematicReligionFr = new Problematic();
        $problematicReligionFr->setWording("Hinduism");
        $problematicReligionFr->setLanguage("en");
        $problematicReligionFr->setCategory($categoryProblematicReligionEn);
        $problematicReligionFr->setIcon("");

        $manager->persist($problematicReligionFr);

        $manager->flush();

    }

    public function loadCategoryProblematic(ObjectManager $manager) {

        //fixtures to add religion fr
        $categoryProblematicReligionFr = new CategoryProblematic();
        $categoryProblematicReligionFr->setWording('Religion');
        $categoryProblematicReligionFr->setLanguage('fr');
        $categoryProblematicReligionFr->setIcon("testicon");

        $this->addReference('category_religion_fr',$categoryProblematicReligionFr);

        $manager->persist($categoryProblematicReligionFr);
        $manager->flush();

        //fixtures to add religion en
        $categoryProblematicReligionEn = new CategoryProblematic();
        $categoryProblematicReligionEn->setWording('Religion');
        $categoryProblematicReligionEn->setLanguage('en');
        $categoryProblematicReligionEn->setIcon("testicon");

        $this->addReference('category_religion_en',$categoryProblematicReligionEn);

        $manager->persist($categoryProblematicReligionEn);
        $manager->flush();

        //fixtures to add politics
        $categoryProblematicPoliticsFr = new CategoryProblematic();
        $categoryProblematicPoliticsFr->setWording('Politique');
        $categoryProblematicPoliticsFr->setLanguage('fr');
        $categoryProblematicPoliticsFr->setIcon("testicon");

        $this->addReference('category_politics_fr',$categoryProblematicPoliticsFr);

        $manager->persist($categoryProblematicPoliticsFr);
        $manager->flush();


        $categoryProblematicPoliticsEn = new CategoryProblematic();
        $categoryProblematicPoliticsEn->setWording('Politics');
        $categoryProblematicPoliticsEn->setLanguage('en');
        $categoryProblematicPoliticsEn->setIcon("testicon");

        $this->addReference('category_politics_en',$categoryProblematicPoliticsEn);

        $manager->persist($categoryProblematicPoliticsEn);
        $manager->flush();


       /* $categoryProblematicReligion = new CategoryProblematic();
        $categoryProblematicReligion->setWording('Religion');
        $categoryProblematicReligion->setLanguage('fr');

        $this->addReference('category_religion',$categoryProblematicReligion);

        $manager->persist($categoryProblematicReligion);
        $manager->flush();*/


        $categoryProblematicMelancholyFr = new CategoryProblematic();
        $categoryProblematicMelancholyFr->setWording('Mélencolie');
        $categoryProblematicMelancholyFr->setLanguage('fr');
        $categoryProblematicMelancholyFr->setIcon("testicon");

        $this->addReference('category_melancholy_fr',$categoryProblematicMelancholyFr);

        $manager->persist($categoryProblematicMelancholyFr);
        $manager->flush();


        $categoryProblematicMelancholyEn = new CategoryProblematic();
        $categoryProblematicMelancholyEn->setWording('Melancholy');
        $categoryProblematicMelancholyEn->setLanguage('en');
        $categoryProblematicMelancholyEn->setIcon("testicon");

        $this->addReference('category_melancholy_en',$categoryProblematicMelancholyEn);

        $manager->persist($categoryProblematicMelancholyEn);
        $manager->flush();

        $categoryProblematicBusinessFr = new CategoryProblematic();
        $categoryProblematicBusinessFr->setWording('Business');
        $categoryProblematicBusinessFr->setLanguage('fr');
        $categoryProblematicBusinessFr->setIcon("testicon");

        $this->addReference('category_business_fr',$categoryProblematicBusinessFr);

        $manager->persist($categoryProblematicBusinessFr);
        $manager->flush();

        $categoryProblematicBusinessEn = new CategoryProblematic();
        $categoryProblematicBusinessEn->setWording('Business');
        $categoryProblematicBusinessEn->setLanguage('en');
        $categoryProblematicBusinessEn->setIcon("testicon");

        $this->addReference('category_business_en',$categoryProblematicBusinessEn);

        $manager->persist($categoryProblematicBusinessEn);
        $manager->flush();

        //fixtures to add  Sport fr
        $categoryProblematicSportFr = new CategoryProblematic();
        $categoryProblematicSportFr->setWording('Sport');
        $categoryProblematicSportFr->setLanguage('fr');
        $categoryProblematicSportFr->setIcon("testicon");

        $this->addReference('category_sport_fr',$categoryProblematicSportFr);

        $manager->persist($categoryProblematicSportFr);
        $manager->flush();

        //fixtures to add  Sport en
        $categoryProblematicSportEn = new CategoryProblematic();
        $categoryProblematicSportEn->setWording('Sport');
        $categoryProblematicSportEn->setLanguage('en');
        $categoryProblematicSportEn->setIcon("testicon");

        $this->addReference('category_sport_en',$categoryProblematicSportEn);

        $manager->persist($categoryProblematicSportEn);
        $manager->flush();

        //fixtures to add family fr
        $categoryProblematicFamilyFr = new CategoryProblematic();
        $categoryProblematicFamilyFr->setWording('Famille');
        $categoryProblematicFamilyFr->setLanguage('fr');
        $categoryProblematicFamilyFr->setIcon("testicon");

        $this->addReference('category_family_fr',$categoryProblematicFamilyFr);

        $manager->persist($categoryProblematicFamilyFr);
        $manager->flush();

        //fixtures to add family en
        $categoryProblematicFamilyEn = new CategoryProblematic();
        $categoryProblematicFamilyEn->setWording('Family');
        $categoryProblematicFamilyEn->setLanguage('en');
        $categoryProblematicFamilyEn->setIcon("testicon");

        $this->addReference('category_family_en',$categoryProblematicFamilyEn);

        $manager->persist($categoryProblematicFamilyEn);
        $manager->flush();

        //fixtures to add music fr
        $categoryProblematicMusicFr = new CategoryProblematic();
        $categoryProblematicMusicFr->setWording('Musique');
        $categoryProblematicMusicFr->setLanguage('fr');
        $categoryProblematicMusicFr->setIcon("testicon");

        $this->addReference('category_music_fr',$categoryProblematicMusicFr);

        $manager->persist($categoryProblematicMusicFr);
        $manager->flush();

        //fixtures to add music en
        $categoryProblematicMusicEn = new CategoryProblematic();
        $categoryProblematicMusicEn->setWording('Music');
        $categoryProblematicMusicEn->setLanguage('en');
        $categoryProblematicMusicEn->setIcon("testicon");

        $this->addReference('category_music_en',$categoryProblematicMusicEn);

        $manager->persist($categoryProblematicMusicEn);
        $manager->flush();

        //fixtures to add  Party/Ceremony/Event fr
        $categoryProblematicEventFr = new CategoryProblematic();
        $categoryProblematicEventFr->setWording('Fête/Céremonie/Evénement');
        $categoryProblematicEventFr->setLanguage('fr');
        $categoryProblematicEventFr->setIcon("testicon");

        $this->addReference('category_event_fr',$categoryProblematicEventFr);

        $manager->persist($categoryProblematicEventFr);
        $manager->flush();

        //fixtures to add  Party/Ceremony/Event en
        $categoryProblematicEventEn = new CategoryProblematic();
        $categoryProblematicEventEn->setWording('Party/Ceremony/Event');
        $categoryProblematicEventEn->setLanguage('en');
        $categoryProblematicEventEn->setIcon("testicon");

        $this->addReference('category_event_en',$categoryProblematicEventEn);

        $manager->persist($categoryProblematicEventEn);
        $manager->flush();


        //fixtures to add  Art fr
        $categoryProblematicArtFr = new CategoryProblematic();
        $categoryProblematicArtFr->setWording('Art');
        $categoryProblematicArtFr->setLanguage('fr');
        $categoryProblematicArtFr->setIcon("testicon");

        $this->addReference('category_art_fr',$categoryProblematicArtFr);

        $manager->persist($categoryProblematicArtFr);
        $manager->flush();

        //fixtures to add  Art en
        $categoryProblematicArtEn = new CategoryProblematic();
        $categoryProblematicArtEn->setWording('Art');
        $categoryProblematicArtEn->setLanguage('en');
        $categoryProblematicArtEn->setIcon("testicon");

        $this->addReference('category_art_en',$categoryProblematicArtEn);

        $manager->persist($categoryProblematicArtEn);
        $manager->flush();




    }

    /*public function loadPublicMessagePicture(ObjectManager $manager) {

    }*/
}
