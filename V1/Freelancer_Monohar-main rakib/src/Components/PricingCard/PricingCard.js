import React from 'react';
import styled from 'styled-components';
import cardImg from "../../images/tropical-spa-resort-concept-plumeria-hot-stones-to-N-1.jpg"
import cardLogo from "../../images/favlogo.png"





const PricingCard = ({height}) => {


const PricingCardDiv = styled.div`
    background: linear-gradient(131deg, white, pink);
    padding: 5px;
    box-sizing: border-box;
    height: ${(props) => props.height || "180px"};
    overflow: hidden;
    border-radius:15px;

    transition: 0.3s;
    cursor: pointer;
    &:hover {
        transform: translateY(-20px);
        box-shadow: 10px 30px 50px -20px pink;
    }
    .desc {
        h6,
        p {
            font-size: 12px;
            color: #000;
        }
    }
    .card-logo {
        img {
            width: 50px;
        }
    }

    .img {
        height:100%;
        img {
            object-fit: cover;
            width: 100%;
            height:180px;
            border-radius:80px;
            transform:rotate(45deg) translate(-30px ,-30px)
        }
    }
`;




    return (
        <PricingCardDiv height={height} className="">
            <div className="row align-items-center">
                <div className="col-6 desc ps-3">
                    <div className="card-logo mb-3"><img src={cardLogo} alt="" className=""/></div>

                    <h6>Lorem, ipsum.</h6>
                    <p className="text-dark text-start">
                        Pricing: <span className="color-theme">$405</span>
                    </p>
                </div>
                <div className="col-6 img">
                    <img className="img-fluid" src={cardImg} alt="" />
                </div>
            </div>
        </PricingCardDiv>
    );
};

export default PricingCard;