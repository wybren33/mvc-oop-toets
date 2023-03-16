<?php

class vulkaanModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getVulkaan()
    {
        $sql = "SELECT  Naam
                       ,Hoogte
                       ,Land
                       ,JaarLaatsteUitbarsting
                       ,AantalSlachtoffers
                FROM   Vulkaan ORDER BY id DESC";

        $this->db->query($sql);

        return $this->db->resultSet();
    }
}