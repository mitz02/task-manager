
import './bootstrap';
import Choices from 'choices.js';
import 'choices.js/public/assets/styles/choices.min.css';



// Initialize Choices.js on document load
document.addEventListener('DOMContentLoaded', () => {
    let  element = document.querySelectorAll(".mySelect");
    element.forEach((ele)=>{
      new Choices(ele, {
        removeItemButton: true,
        searchEnabled: true,
        placeholderValue: 'Select applicable social media',
      });
    })
    


 
   



    let  elementstate = document.querySelectorAll(".state");
    elementstate .forEach((ele)=>{
      new Choices(ele, {
        removeItemButton: true,
        searchEnabled: true,
        placeholderValue: 'state of residence',
      });
    })  
    
    
    let myselect = document.querySelectorAll(".mySingleSelect");
    myselect.forEach((ele)=>{
           new Choices(ele, {
      searchEnabled: true,
      removeItemButton: false,
      placeholderValue: 'Select task type',
  });
    })
    // let serviceType = document.querySelectorAll(".serviceType");
    // serviceType.forEach((ele)=>{
    //   new Choices(ele, {
    //     searchEnabled: true,
    //     removeItemButton: false,
    //     placeholderValue: 'Select task type',
    // });
    // })



let adsForm = document.querySelectorAll(".ads-form")


const adsItems = document.querySelectorAll('.ads-item');
let selectedType = null;


// Loop through all ads-items and add click event listeners
adsItems.forEach(item => {
    item.addEventListener('click', function() {
        // Remove selected class from all items
        adsItems.forEach(who => who.classList.remove('bg-red-400'));
        adsItems.forEach(who => who.classList.add('bg-white'));
        
        
        // Add selected class to clicked item
        this.classList.add('bg-red-400');
        this.classList.remove('bg-white');
        
        
        // Store selected type
        selectedType = this.getAttribute('data-type');
        
        // Enable Next button
        document.getElementById('adsNextBtn').disabled = false;
    });

     
});
  // Handle the Next button click
  let nextBtn = document.getElementById('adsNextBtn');
if(nextBtn){
  nextBtn.addEventListener('click', function() {
    if (selectedType === 'brandAds') {
      window.open("/promote/promote", "_self")
    } else if (selectedType === 'socialAds') {
      window.open("/promote/engagement","_self")
    }else if (selectedType === 'appAds', "_self") {
      window.open("/user/app-ads", "_self")
    }
    deActivatecategoryOverlay();
  
});
}


  });
