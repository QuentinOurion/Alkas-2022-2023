<?php

namespace App\Test\Controller;

use App\Entity\Chemise;
use App\Repository\ChemiseRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ChemiseControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private ChemiseRepository $repository;
    private string $path = '/chemise/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(Chemise::class);

        foreach ($this->repository->findAll() as $object) {
            $this->repository->remove($object, true);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Chemise index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $originalNumObjectsInRepository = count($this->repository->findAll());

        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'chemise[nom]' => 'Testing',
            'chemise[taille]' => 'Testing',
            'chemise[couleur]' => 'Testing',
            'chemise[marqueChemise]' => 'Testing',
        ]);

        self::assertResponseRedirects('/chemise/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Chemise();
        $fixture->setNom('My Title');
        $fixture->setTaille('My Title');
        $fixture->setCouleur('My Title');
        $fixture->setMarqueChemise('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Chemise');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Chemise();
        $fixture->setNom('My Title');
        $fixture->setTaille('My Title');
        $fixture->setCouleur('My Title');
        $fixture->setMarqueChemise('My Title');

        $this->repository->save($fixture, true);

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'chemise[nom]' => 'Something New',
            'chemise[taille]' => 'Something New',
            'chemise[couleur]' => 'Something New',
            'chemise[marqueChemise]' => 'Something New',
        ]);

        self::assertResponseRedirects('/chemise/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getNom());
        self::assertSame('Something New', $fixture[0]->getTaille());
        self::assertSame('Something New', $fixture[0]->getCouleur());
        self::assertSame('Something New', $fixture[0]->getMarqueChemise());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new Chemise();
        $fixture->setNom('My Title');
        $fixture->setTaille('My Title');
        $fixture->setCouleur('My Title');
        $fixture->setMarqueChemise('My Title');

        $this->repository->save($fixture, true);

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/chemise/');
    }
}
