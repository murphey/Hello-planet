
/* Here you make an array with all the URL's of the images you would like to have in your slideshow.*/

var image = new Array("jav/tabs/rollz_1.png" , "jav/tabs/rollz_2.png", 
"jav/tabs/rollz_3.png", "jav/tabs/rollz_4.png")

var imgNumber=1

/* This number is used to refer to a value of the Array and to know what image should be shown next. */


var numberOfImg = image.length

/* This is the total amount of images you use, it is used to determine if the imgNumber can still grow. */


/* Now it's time to make the functions for the next and previous buttons */

function previousImage(){
  if(imgNumber > 1){
    imgNumber--
    }
	
/* The if statement is used to know if you aren't already at the first image, because if you are, imgNumber may not decrease. */
 
  else{
  	imgNumber = numberOfImg
	}
	
/* If you already are at the first image, and you click the previous button, the slideshow must show the last image. */


  document.slideImage.src = image[imgNumber-1]


	  /* Load the image into the document. Don't forget to write imgNumber-1, an array always starts from 0! */


  }
function nextImage(){
  if(imgNumber < numberOfImg){
    imgNumber++
    }
	
/* The if statement is used to know if you aren't already at the last image, because if you are, imgNumber may not increase. */

  else{
  	imgNumber = 1
	}
	
/* If you already are at the last image, and you click the next button, the slideshow must show the first image. */


  document.slideImage.src = image[imgNumber-1]

  
  slideImage.style.width= "200px"; //de formaat
/* Load the image into the document. Don't forget to write imgNumber-1, an array always starts from 0! */


  }
  
  
/* Now it is time for the code that preloads the images. */

/* Check if your browser supports the Image Object. */

if(document.images){


   /* Create a new Image Object. */
   
   var image1 = new Image()
   
   
   /* Give the source of the image to the Image Object. */
   
   image1.src = "jav/rollz_1.png"

   
   /* Repeat this for all the images you would like to preload.
   
   Make sure that you do not preload too many images, this will make your document load slow. */
   var image2 = new Image()
   image2.src = "jav/tabs/rollz_2.png"
   var image3 = new Image()
   image3.src = "jav/tabs/rollz_3.png"
   var image4 = new Image()
   image4.src = "jav/tabs/rollz_4.png"
   } 
