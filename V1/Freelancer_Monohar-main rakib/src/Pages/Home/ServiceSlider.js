import React from 'react';
import styled from 'styled-components';
import { ServiceIconData } from '../../Components/iconJson/serviceIcon';
import Servicesbox from '../../Components/ServicesBox/Servicesbox';
import Slider from '../../Components/Slider/Slider';


const ServiceSlider = () => {




    const servicesSliderCarddiv = styled.div`
    width:265px;
    background:white;
    padding:20px;
    cursor: pointer;
    transition:0.3s; 
    &:hover{
        img{
            transform:scale(0.9)
        }
    }
    img{
        width:100%;
        height:220px;
        object-fit:cover;
        border-radius:20px;
        transition:0.3s;

    }

    
    `
       
   


    return (
        <div>

            <Slider items={ServiceIconData.map(item=> <Servicesbox text={item.name} image={item.iconImg}/>)} />
            
        </div>
    );
};

export default ServiceSlider;