import React from 'react';
import { Link } from 'react-router-dom';
import './new.css';
import topImg from '../../images/Group 24.png';


const SignIn = () => {
    return (
        <div id="sign-in">
             <header className="first-page">
                 <div className="mobile-img">
                     <img src={topImg} alt=""/>
                 </div>
            <div className="sign-in-box">
                <div className="sign-in">

                <p>New User? <Link to="register">Create an account</Link></p>
                    <div className="uppersignin">
                    
                    <div className="text-input">
                        <input type="text" placeholder="Email address" />
                    </div>

                    <div className="btn">
                        <a href="">Continue</a>
                    </div>

                    <div className="hr"><p>or</p></div>

                    </div>
                    <h4>Sign in</h4>
              
                    <div className="continue-box">
                        <div className="btn-icon">
                            <a href="#"> <img style={{marginRight:"12px"}} src="https://i.pinimg.com/originals/39/21/6d/39216d73519bca962bd4a01f3e8f4a4b.png" alt="" />continue with google</a>
                        </div>
                        <div className="fb-btn btn-icon">
                            <a href="google-btn" style={{color:"white"}}><i style={{fontSize:"18px", marginRight:"12px"}} className="fab fa-facebook-f"></i>continue with facebook</a>
                        </div>
                    </div>

                    <p>Protected by reCAPTCHA and subject to the google <a className="footer-links" href="">Privacy policy</a> and <a className="footer-links" href="">terms of service</a>.</p>
                </div>
            </div>
        </header>
        </div>
    );
};

export default SignIn;