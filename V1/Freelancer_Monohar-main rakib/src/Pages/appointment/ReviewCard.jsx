import React from 'react';
import "./review.css"




const ReviewCard = ({img,openModal}) => {
    return (
        <>
            <div class="col-sm-12 p-2 p-md-3 p-lg-4 col-md-4">
               
           <div class="Mycard" onClick={openModal}>

            <div class="imageForcard">
              <img src={img} alt="" srcset="" id="ImaegForCard" />
            </div> 

            <div class="cardContent m-3">
                <div class="text-large cardtitle">Name</div>

                <div> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                 <div id="rupeebalance"> <span> <i class="fas fa-rupee-sign"></i>  499</span>  </div>
            </div>


           </div>

              

          </div>
        </>
    );
};

export default ReviewCard;