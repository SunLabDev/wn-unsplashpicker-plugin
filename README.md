## UnsplashPicker
This plugin allows you to upload image directly through the Unsplash API.

#### Requirements
To use this plugin, you'll need to create an account
and fill your credentials on the backend settings

#### How to use
When you want to display the widget,
just use it in your fields.yaml file on an `attachMany` or `attachOne` relationship.
UnsplashPicker is an extension of FileUpload widget, you can use the same options:

    form:
        fields:
            featured_images:
                label: Featured images
                type: unsplashpicker
                imageHeight: 260
                imageWidth: 260
                maxFilesize: 12
                attachOnUpload: true

#### Known issues
When attached with an `attachOne` relationship, you can visually attach more than one file,
this is only a visual bug that will be fixed soon.

On form submit, only the last attached file is saved.
