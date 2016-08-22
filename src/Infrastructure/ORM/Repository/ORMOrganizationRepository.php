<?php

namespace Contacts\Infrastructure\ORM\Repository;

use Contacts\Domain\Organization\Organization;
use Contacts\Domain\Organization\OrganizationId;
use Contacts\Domain\Organization\OrganizationRepository;

class ORMOrganizationRepository extends ORMRepository implements OrganizationRepository
{
    public function add(Organization $organization)
    {
        $this->doAdd($organization);
    }

    public function get(OrganizationId $id)
    {
        return $this->doGet($id);
    }

    public function delete(OrganizationId $id)
    {
        return $this->doDelete($id);
    }
}
