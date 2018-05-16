<?php

class Region extends DataObject
{
    private static $db = [
        'Title'         =>  'Varchar',
        'Description'   =>  'Text',
    ];

    private static $has_one = [
        'Photo'         => 'Image',
        'RegionsPage'   => 'RegionsPage'
    ];

    private static $summary_fields = [
//        'GridThumbnail' => '',
        'Photo.CMSThumbnail' => '',
        'Photo.Filename' => 'File path',
        'Title' => 'Title of region',
        'Description'   => 'Short description',
    ];

    public function getGridThumbnail()
    {
        if ($this->Photo()->exists()){
            return $this->Photo()->SetWidth(50);
        }
        return '(no image)';
    }
    public function getCMSFields()
    {
        $fields = FieldList::create(
            TextField::create('Title'),
            TextareaField::create('Description'),
            $uploader = UploadField::create('Photo')
        );
        $uploader->setFolderName('region-photos');
        $uploader->getValidator()->setAllowedExtensions([
            'png', 'gif', 'jpeg', 'jpg'
        ]);
        return $fields;
    }
}