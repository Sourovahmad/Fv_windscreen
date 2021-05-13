import React from 'react';
import AppleImg from '../../images/apple.png';
import IndImg from '../../images/india.png';
import GoogleImg from '../../images/google.png';
import './RefferSearch.css';


const RefferSearchBar = () => {

    return (
        <div>
            
            <section className="refer-section">

                <div className="main">
                    <h2>Refer and get free services </h2>
                    <p>Invite Your Friend's to Urban Company Services. They get Rs. 100 off.
                        <br/>
                        You win upto Rs. 5000
                         </p>


                         <div className="number-box">

                             <div className="indian-f">
                                 <img src={IndImg} alt="" srcset=""/>
                             </div>

                             <select name="" id="">
                             <option value="+91">+91</option>
                                <option value="+91">+91</option>
                                <option value="+91">+91</option>
                                <option value="+91">+91</option>

                             </select>

                             <input type="text" id="reffarSearchBarInput"/>
                             <button> Send &#62; </button>

                         </div>

                         <div className="img-box">
                             <img src={GoogleImg} alt="" srcset=""/>
                             <img src={AppleImg} alt="" srcset=""/>
                         </div>
                </div>
      



            </section>


        </div>
    );
};

export default RefferSearchBar;