<?php

// class Element qui définit toute les charactéristiques d'un user avec pleins de fonctions
// qui le définissent et qui lui sont propres
// récupère et donc à accès à toutes les fonction de sa class mère (Db)

class Element extends Bdd
{
    public static function getAllElements()
    {
        return Bdd::getInstance()->conn->query('SELECT * FROM `element` ORDER BY id DESC');
    }

    public static function getAllCategorie()
    {
        return Bdd::getInstance()->conn->query('SELECT * FROM `categorie` ORDER BY id DESC');
    }

    public static function getAllSousCategorie()
    {
        return Bdd::getInstance()->conn->query('SELECT * FROM `sous_categorie` ORDER BY id DESC');
    }

    public static function getAllSousSousCategorie()
    {
        return Bdd::getInstance()->conn->query('SELECT * FROM `sous_sous_categorie` ORDER BY id DESC');
    }

    public static function getAllType()
    {
        return Bdd::getInstance()->conn->query('SELECT * FROM `type` ORDER BY id DESC');
    }

    public static function getSpecificElement($id)
    {
        return Bdd::getInstance()->conn->query(sprintf('SELECT * FROM `element` 
			WHERE id = %d', $id));
    }

    public static function getSpecificSousCategorie($id_categorie)
    {
        return Bdd::getInstance()->conn->query(sprintf('SELECT * FROM `sous_categorie` 
			WHERE id_categorie = %d', $id_categorie));
    }

    public static function getSpecificSousSousCategorie($id_categorie, $id_sous_categorie)
    {
        return Bdd::getInstance()->conn->query(sprintf('SELECT * FROM `sous_sous_categorie` 
			WHERE id_categorie = %d AND id_sous_categorie = %d', $id_categorie, $id_sous_categorie));
    }

    public static function getSpecificElementSort($id_categorie, $id_sous_categorie, $id_sous_sous_categorie)
    {
        return Bdd::getInstance()->conn->query(sprintf('SELECT * FROM `element` WHERE id_categorie = %d 
            AND id_sous_categorie = %d AND id_sous_sous_categorie = %d ORDER BY id',
            $id_categorie, $id_sous_categorie, $id_sous_sous_categorie));
    }

    public static function getSpecificElementSortDesc($id_categorie, $id_sous_categorie, $id_sous_sous_categorie)
    {
        return Bdd::getInstance()->conn->query(sprintf('SELECT * FROM `element` WHERE id_categorie = %d 
            AND id_sous_categorie = %d AND id_sous_sous_categorie = %d ORDER BY id DESC',
            $id_categorie, $id_sous_categorie, $id_sous_sous_categorie));
    }
    
    public static function getJoinAllElements()
    {
        return Bdd::getInstance()->conn->query("SELECT *, element.id as theId, categorie.nom as theCat, 
            sous_categorie.nom as theSubCat, sous_sous_categorie.nom as theSubSubCat, type.nom as theType FROM `element` 
            INNER JOIN categorie ON element.id_categorie = categorie.id 
            INNER JOIN sous_categorie ON element.id_sous_categorie = sous_categorie.id 
            INNER JOIN sous_sous_categorie ON element.id_sous_sous_categorie = sous_sous_categorie.id
            INNER JOIN type ON element.id_type = type.id");
    }

    public static function addElement($image, $titre, $lien, $id_categorie, $id_sous_categorie, $id_sous_sous_categorie, $id_type) 
    {
        $sql = "INSERT INTO `element` (image, titre, lien, id_categorie, id_sous_categorie, id_sous_sous_categorie, id_type) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = Bdd::getInstance()->conn->prepare($sql);
        $stmt->execute([
            $image,
            $titre,
            $lien,
            $id_categorie,
            $id_sous_categorie,
            $id_sous_sous_categorie,
            $id_type
        ]);
        return Element::getAllElements();
    }

    public static function updateElement($image, $titre, $lien, $id_categorie, $id_sous_categorie, $id_sous_sous_categorie, 
        $id_type, $id)
    {
        $sql = "UPDATE `element` SET `image` = ?, `titre` = ?, 
                `lien` = ?, `id_categorie` = ?, `id_sous_categorie` = ?, 
                `id_sous_sous_categorie` = ?, `id_type` = ? WHERE `id` = ?";
        $stmt = Bdd::getInstance()->conn->prepare($sql);
        $stmt->execute([
            $image,
            $titre,
            $lien,
            $id_categorie,
            $id_sous_categorie,
            $id_sous_sous_categorie,
            $id_type,
            $id
        ]);
    	return Element::getSpecificElement($id);
    }

    public static function deleteElement($id) 
    {
        return Bdd::getInstance()->conn->query(sprintf('DELETE FROM element WHERE `id` = %d', $id));
    }
}