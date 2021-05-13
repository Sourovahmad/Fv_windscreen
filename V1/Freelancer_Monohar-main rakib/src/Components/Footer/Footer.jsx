import React from "react";
import "./style.css"
import img from  '../../images/Group 24.png';
import home from  '../../images/home.svg';
import booking from  '../../images/booking.svg';
import repair from  '../../images/repair.svg';
import reffer from  '../../images/refer.svg';
import discount from  '../../images/discount.svg';



const Footer = () => {
    return (
<>
            <footer class="final-section">
                <div className="logo-image">
                    <img src={img} alt="" class="logo-img" />
                </div>

                <ul class="first-line">
                    <li>Home</li>
                    <li>Offer </li>
                    <li>Appoinment</li>
                    <li>Blog</li>
                </ul>
                <ul class="second-line">
                    <li>info@gmail.com</li>
                    <li>+0xxxxxxxxxxx</li>
                    <li>+0xxxxxxxxxxx</li>
                    <li>+0xxxxxxxxxxx</li>
                </ul>
                <p>&copy; Copy Right 2021 Lorem, ipsum dolor.</p>

                <hr class="hr" />

                <div class="bottom-part">
                    <div class="left-part">&copy; Copy Right 2021 -Lorem ipsum dolor sit amet.</div>

                    <div class="right-part">
                        <div class="icon">
                            <i class="fab fa-facebook"></i>
                        </div>

                        <div class="icon">
                            <i class="fab fa-facebook"></i>
                        </div>

                        <div class="icon">
                            <i class="fab fa-facebook"></i>
                        </div>

                        <div class="icon">
                            <i class="fab fa-facebook"></i>
                        </div>
                    </div>
                </div>
            </footer>

            <footer class="mobile-version">
                <div class="icon-box">
                        <img src={home} alt=""/>
                    <h4>Home</h4>
                </div>
                <div class="icon-box">
                    <img src={booking} alt="" />
                    <h4>Bookings</h4>
                </div>
                <div class="icon-box">
                    <img src={repair} alt="" />
                    <h4>Home Service</h4>
                </div>
                <div class="icon-box">
                    <img src={reffer} alt="" />
                    <h4>Fees</h4>
                </div>
                <div class="icon-box">
                    <img src={discount} alt="" />
                    <h4>Offers</h4>
                </div>
            </footer>
        </>
    );
};

export default Footer;
