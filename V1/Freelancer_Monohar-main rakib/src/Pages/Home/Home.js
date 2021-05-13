import React from "react";
import Slider from "../../Components/Slider/Slider";
import { sliderItems } from "./HomePageSliderContent";
import "./Home.css";
import Services from "./Services";
import PricingSlider from "./PricingSlider";
import ShopCardSlider from "./ShopCardSlider";
import TestomonialSlider from "./TestomonialSlider";
import male from "../../images/man.png"
import famle from "../../images/woman-famle.png"
import Footer from "../../Components/Footer/Footer";
import ServiceSlider from "./ServiceSlider";
import { Link } from "react-router-dom";
import RefferSearchBar from "./RefferSearchBar";




const Home = () => {
    return (
        <div id="homePage">
            <header id="header-section">
                <Slider items={sliderItems} />
            </header>


            <section id="male-famle">
                <div className="container" >
                    <div className=" mx-auto pt-5" >
                        <div className="row justify-content-center">
                            <div className="col-md-6 text-center p-4">
                                <img src={male} alt="" className="img-fluid " />
                                <h5 className="text-center">Male</h5>
                            </div>
                            <div className="col-md-6 text-center p-4">
                                <img src={famle} alt="" className="img-fluid" />
                                <h5 className="text-center">Famale</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

 
               
            <section id="mobile-view-male-female">

                <div className="container d-flex">

                    <div className="maleSection">
                        <img src={male} alt="" className="img-fluid " />
                        <h5 className="text-center">Male</h5>
                    </div>

                    <div className="femaleSection">
                        <img src={famle} alt="" className="img-fluid" />
                        <h5 className="text-center">Famale</h5>
                    </div>

                </div>


            </section>




             
            <div id="services-for-webview">
             <Services />
             </div>




            <div id="services-mobileview">
                 
                 <div className="slider-upper-section d-flex ms-4 me-4">
                      <h6 className="text-left font-weight-bold"> Appointment</h6>
                 </div>
               <ServiceSlider/>


                </div>


                <div id="services-mobileview">
                 
                 <div className="slider-upper-section d-flex ms-4 me-4">
                      <h6 className="text-left font-weight-bold"> Appointment</h6>
                 </div>
               <ServiceSlider/>


                </div>

            <PricingSlider />

            <div id="feature-shop" className="py-5">
                <div className="text-center p-4">
                    <h1 className="fw-bold">Feature Shop</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                </div>

                <div className="container">
                    <ShopCardSlider />
                </div>
            </div>

            <div id="feature-shop" className="py-5">
                <div className="text-center p-4">
                    <h1 className="fw-bold"> Shop NereBy</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                </div>

                <div className="container">
                    <ShopCardSlider />
                </div>
            </div>


            <div id="customer-Review">
                <div className="text-center p-3" id="customer-review-headSection">
                    <h1 className="fw-bold"> Customer Safty is our Priority</h1>
                    <p>What's Our Client Saying About our Safety standards</p>
                </div>

                <div className="container">
                    <TestomonialSlider />
                </div>
            </div>


            <div className="container-fluid">
                <div className="row">
                    <div className="col-sm-12 col-md-12">
                        <RefferSearchBar /> 
                    </div>
                </div>
            </div>
    




            
        </div>
    );
};

export default Home;
