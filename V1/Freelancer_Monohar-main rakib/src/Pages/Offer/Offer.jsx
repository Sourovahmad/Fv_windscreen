import React from 'react';
import HeaderSimpleBanner from './HeaderSimpleBanner';
import manHeirCuttingImg from "../../images/stylish-barber-grooming-a-mans-beard-in-a-saloon-ZDEE-1.jpg"
import PricingSlider from '../Home/PricingSlider';
import Slider from '../../Components/Slider/Slider';



const Offer = () => {
    return (
        <div id="offerPage">
            <HeaderSimpleBanner 
            headerText={
                <>
                <h1 className="font-serif headline text-light text-center">Lorem ipsum dolor  <br/>
                <span className="color-theme">Flat $100 off</span>
                .</h1>
                </>
            }
            bgImg={manHeirCuttingImg}
            />


            <section id="men-serivce">
                <div className="title p-5 text-center">
                    <h1>Lorem ipsum dolor sit amet.</h1>
                    <p className="small">Lorem Lorem ipsum, dolor sit amet consectetur adipisicing. ipsum dolor sit amet consectetur adipisicing elit. Delectus, officiis.</p>
                </div>

                <div className="container">
                    <PricingSlider towCard={true}/>
                </div>
                <div className="p-5"></div>
            </section>
            <section id="women-serivce">
                <div className="title p-5 text-center">
                    <h1>Lorem ipsum dolor sit amet.</h1>
                    <p className="small">Lorem Lorem ipsum, dolor sit amet consectetur adipisicing. ipsum dolor sit amet consectetur adipisicing elit. Delectus, officiis.</p>
                </div>

                <div className="container">
                    <PricingSlider towCard={true}/>
                </div>
                <div className="p-5"></div>
            </section>
        </div>
    );
};

export default Offer;