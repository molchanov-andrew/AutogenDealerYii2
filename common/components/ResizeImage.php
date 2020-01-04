<?php
/*resize uploaded picture to necessary size*/

namespace common\components;

use Intervention\Image\ImageManager;
use yii\base\Component;


class ResizeImage extends Component
{
    public function resizePicture($width, $height, $model)
    {
        // create instance
        $manager = new ImageManager(array('driver' => 'imagick'));
        $img = $manager->make($model->getImage());

        // resize image to fixed size
        $img->fit($width, $height)->save($model->getImage());
    }
}
