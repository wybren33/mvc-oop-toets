<?php

class Vulkaan extends BaseController
{
    private $vulkaanModel;

    public function __construct()
    {
        $this->vulkaanModel = $this->model('CountryModel');
    }

    public function index()
    {
        $vulkaan = $this->vulkaanModel->getVulkaan();

        $rows = '';
        foreach ($vulkaan as $result) {
            $rows .= "<tr>
                        <td>$result->Naam</td>
                        <td>$result->Hoogte</td>
                        <td>$result->Land</td>
                        <td>$result->JaarLaatsteUitbarsting</td>
                        <td>$result->AantalSlachtoffers</td>
                      </tr>";
        }

        $data = [
            'title' => 'Welkom op de Landenpagina',
            'records' => 'info uit de database',
            'rows'    => $rows
        ];

        $this->view('Vulkaan/index', $data);
    }
}