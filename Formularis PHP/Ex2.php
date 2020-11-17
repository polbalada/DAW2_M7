<?php
class Persona{
    public $nom;
    public $cognoms;
    public $data_neixament;
    public $correu_electronic;
    public $telefon;
    public $adreça_postal;
    public $dni;
    public $cicle;

    function __construct($nom, $cognoms, $data_neixament, $correu_electronic, $telefon, $adreça_postal, $dni, $cicle) {
        $this->nom = $nom;
        $this->cognoms = $cognoms;
        $this->data_neixament = $data_neixament;
        $this->correu_electronic = $correu_electronic;
        $this->telefon = $telefon;
        $this->adreça_postal = $adreça_postal;
        $this->dni = $dni;
        $this->cicle = $cicle;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @return mixed
     */
    public function getCognoms()
    {
        return $this->cognoms;
    }

    /**
     * @return mixed
     */
    public function getDataNeixament()
    {
        return $this->data_neixament;
    }

    /**
     * @return mixed
     */
    public function getCorreuElectronic()
    {
        return $this->correu_electronic;
    }

    /**
     * @return mixed
     */
    public function getTelefon()
    {
        return $this->telefon;
    }

    /**
     * @return mixed
     */
    public function getAdreçaPostal()
    {
        return $this->adreça_postal;
    }

    /**
     * @return mixed
     */
    public function getDni()
    {
        return $this->dni;
    }

    /**
     * @return mixed
     */
    public function getCicle()
    {
        return $this->cicle;
    }

}

$p=new Persona($_POST["nom"],$_POST["cognoms"],$_POST["dataNaixement"],$_POST["correu"],$_POST["telef"],$_POST["codiPostal"],$_POST["dni"],$_POST["cicle"]);
//echo $p->getNom();
?>
<table border="black" align="center" >
    <tr>
        <th>Nom</th>
        <td><?php $p->getNom();?></td>
    </tr>
    <tr>
        <th>Cognoms</th>
        <td></td>
    </tr>
    <tr>
        <th>Data de Naixement</th>
        <td></td>
    </tr>
    <tr>
        <th>Correu</th>
        <td></td>
    </tr>
    <tr>
        <th>Telefon</th>
        <td></td>
    </tr>
    <tr>
        <th>Codi Postal</th>
        <td></td>
    </tr>
    <tr>
        <th>DNI</th>
        <td></td>
    </tr>
    <tr>
        <th>Cicle</th>
        <td></td>
    </tr>
</table>
