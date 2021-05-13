import React from 'react';
import PricingCard from '../../Components/PricingCard/PricingCard';
import Slider from '../../Components/Slider/Slider';
import {pricingSlidercontent, sliderItems} from "./HomePageSliderContent"


const PricingSlider = ({towCard}) => {

        const twoPricingCardContent = [1,2,34,5,5].map(item => {
            return (
                <div style={{ width: "510px"  }} className="pricing-card-item">
                    <PricingCard height={"250px"} />
                </div>
            );
        })

    return (
        <section id="pricing-card-section" className="container">
            {towCard || <Slider items={pricingSlidercontent}></Slider>}

            {towCard && <Slider items={twoPricingCardContent}></Slider>}
        </section>
    );
};

export default PricingSlider;