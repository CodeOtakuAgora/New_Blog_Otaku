<?php

// class TableVideo qui définit toute les charactéristiques d'un user avec pleins de fonctions
// qui le définissent et qui lui sont propres
// récupère et donc à accès à toutes les fonction de sa class mère (Db)

class TableVideo extends Bdd
{
    public static function getAllTableVideo($element_list) { ?>
        <div class="table-video">
            <?php foreach ($element_list as $result) {
                if ($result['id_type'] == 1) { ?>
                        <figure>
                            <img src="<?php echo $result['image'] ?>" width="300px" height="200px" alt="dernier épisode">

                            <figcaption>
                                <a href="<?php echo $result['lien'] ?>" target="_blank">
                                    <?php echo $result['titre'] ?>
                                </a>
                            </figcaption>
                        </figure>
                    
                <?php }
                elseif ($result['id_type'] == 2) { ?>
                    <div class="table-video">
                        <iframe width="300px" height="200px" src="<?php echo $result['lien'] ?>"
                            title="Vidéo youtube" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
                    </div>
                <?php }
            } ?>
        </div>
    <?php }

    public static function getAllSpecificTableVideo($element_list, $categorie) {
        foreach ($element_list as $result) {
            if ($result['id_type'] == 1) { ?>
                <figure <?php if ($categorie == 'Mangas') { ?> class="little-table-video" <?php } ?>>
                    <img src="<?php echo $result['image'] ?>" width="300px" height="200px" alt="dernier épisode">
                    <figcaption>
                        <a href="<?php echo $result['lien'] ?>" target="_blank">
                            <?php echo $result['titre'] ?>
                        </a>
                    </figcaption>
                </figure>
            <?php } elseif ($result['id_type'] == 2) { ?>
                <iframe width="300px" height="200px" src="<?php echo $result['lien'] ?>"
                    title="Vidéo youtube" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
        <?php }
        }

    }
}