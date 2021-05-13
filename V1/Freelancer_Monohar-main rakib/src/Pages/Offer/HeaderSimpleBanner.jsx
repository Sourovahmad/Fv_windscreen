import React from 'react';
import styled from 'styled-components';
import './offer.css';

const HeaderSimpleBanner = ({headerText,bgImg}) => {
    const HeaderSimpleBannerDiv = styled.div`
        width: 100%;
        height: 100vh;
        display: grid;
        place-items: center;
        background: url(${(props) => props.background}) no-repeat top center;
        background-color:rgba(0, 0, 0, 0.329);
        background-blend-mode:soft-light;
        background-size:cover;
        .headline{
            font-size:80px;
            font-weight:800;
        }
    `;




    return (
        <HeaderSimpleBannerDiv background={bgImg} className="topbannerSection">
            <div className="container">{headerText}</div>
        </HeaderSimpleBannerDiv>
    );
};

export default HeaderSimpleBanner;