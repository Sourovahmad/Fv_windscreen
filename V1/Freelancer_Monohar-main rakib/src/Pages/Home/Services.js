import React from 'react';
import Servicesbox from '../../Components/ServicesBox/Servicesbox';
import {ServiceIconData} from "../../Components/iconJson/serviceIcon"

const Services = () => {
    return (
        <div>
            <div id="service">
                <div id="appointment" className="pt-5">
                    <div className="container p-4">
                        <div className="services-container serviceBox-cover-shadow  p-3">
                            <div className="p-3 text-center">
                                <h2 className="text-center fw-bold">Services</h2>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, exercitationem!</p>
                            </div>

                            <div className="row row-cols-2 row-cols-md-3  row-cols-lg-6 justify-content-center">
                               {
                                   ServiceIconData.map(item=> <Servicesbox text={item.name} image={item.iconImg}/>)
                               }
                            </div>
                        </div>
                    </div>
                </div>

                <div id="home-services" className="pt-5">
                    <div className="container p-4">
                        <div className="services-container serviceBox-cover-shadow  p-3">
                            <div className="p-3 text-center">
                                <h2 className="text-center fw-bold">Home Services</h2>
                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, exercitationem!</p>
                            </div>

                            <div className="row row-cols-2 row-cols-md-3  row-cols-lg-6 justify-content-center">
                                {
                                   ServiceIconData.map(item=> <Servicesbox text={item.name} image={item.iconImg}/>)
                               }
                               </div>
                        </div>
                    </div>
                </div>
                <div className="p-5"></div>
            </div>
        </div>
    );
};

export default Services;