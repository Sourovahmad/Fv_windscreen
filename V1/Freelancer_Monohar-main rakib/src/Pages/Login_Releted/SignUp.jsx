import React from 'react';
import { Link } from 'react-router-dom';
import './new.css'
import topImg from '../../images/Group 24.png';
const SignUp = () => {
    return (
        <div id="sign-in">
            <section class="second-page">

            <div className="mobile-img">
                     <img src={topImg} alt=""/>
                 </div>
        <div class="sign-in-box">
            <div class="sign-in">
                <h4>Sign in</h4>
                <p>Already have an account <Link to="/login">Login</Link> </p>


                <div class="text-input">
                    <input type="text" placeholder="Email address"/>
    
                    <div class="flex-input-box">
                        <input type="text" placeholder="First Name"/>
                        <input type="text" placeholder="Last Name"/>
                    </div>
    
                    <input type="text" placeholder="Password"/>
                    <input type="text" placeholder="Location"/>
                    <input type="text" placeholder="Phone Number"/>
                </div>


                <div class="radio-text">
                <input type="radio" value="yes"/> <label for="">Please contact me via email</label>

                </div>
                    <div class="btn">
                        <a href="">Create an account</a>
                    </div>

                    <hr/>

                    <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa
                        qui officia deserunt mollit anim id est laborum.</p>

                <p>Protected by reCAPTCHA and subject to the google <a class="footer-links" href="">Privacy


                        policy</a> and <a class="footer-links" href="">terms of service</a>.</p>
            </div>

        </div>


    </section>
        </div>
    );
};

export default SignUp;