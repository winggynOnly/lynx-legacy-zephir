<?php
/**
 * @author Patsura Dmitry <zaets28rus@gmail.com>
 */

namespace Phalcon\Tests\ORM;

use Phalcon\ORM,
	Phalcon\DBAL;

class EntityManagerTest
	extends TestCase
{
	public function testCreateQueryBuilder()
	{
		$queryBuilder = $this->_em->createQueryBuilder();
		$this->assertTrue($queryBuilder instanceof ORM\QueryBuilder);
	}

	public function testFlush()
	{
		$this->_em->flush(array());
	}

	public function testGetConnection()
	{
		$this->assertTrue($this->_em->getConnection() instanceof DBAL\Connection);
	}

	public function testCreateQuery()
	{
		$sql = "SELECT * FROM `table`";

		$queryBuilder = $this->_em->createQuery($sql);
		$this->assertTrue($queryBuilder instanceof ORM\Query);
	}
}