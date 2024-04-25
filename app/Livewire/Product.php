<?php

namespace App\Livewire;

use Livewire\Component;

class Product extends Component
{

    public $media = [
        'https://piscinalimpa.files.wordpress.com/2022/04/59d6c-19abr.jpg',
        'https://nautilusbr.com/dev/wp-content/uploads/2092-scaled.jpg',
        'https://scontent.frao1-2.fna.fbcdn.net/v/t39.30808-6/320030347_898603991507119_3158216773267849988_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGZzzajqnMOfiAc6V6BVSWpzQFhLX3OkbzNAWEtfc6RvKWK4SXSHlQYbO4EFMtMyM7VsoR1mTRPKMivtTKxTTFA&_nc_ohc=gVt0KGPNqKMAb4g08Z5&_nc_ht=scontent.frao1-2.fna&oh=00_AfARSy5Qe-nud_FEfzLPyyhzbyjzp8Ad0_ti7NpAUlTKVw&oe=662F2EF8',
    ];

    public $currentSlide = 0;

    public function render()
    {
        return view('livewire.product');
    }

    public function numSlides()
    {
        return count($this->media);
    }

    public function getCurrentImage()
    {
        return $this->media[$this->currentSlide];
    }

    public function nextSlide()
    {
        $this->currentSlide = ($this->currentSlide + 1) % $this->numSlides();
    }

    public function prevSlide()
    {
        $this->currentSlide = ($this->currentSlide - 1 + $this->numSlides()) % $this->numSlides();
    }

    public function isImage($url)
    {
        return strpos($url, '.jpg') !== false;
    }

    public function isVideo($url)
    {
        $extension = pathinfo(parse_url($url, PHP_URL_PATH), PATHINFO_EXTENSION);
        return in_array($extension, ['mp4', 'webm', 'avi', 'mov', 'wmv', 'flv', 'mkv']);
    }
}
