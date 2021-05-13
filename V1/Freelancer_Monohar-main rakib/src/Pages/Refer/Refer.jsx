import React from 'react';
import man_woman from "../../images/cupol-image.png";


const Refer = () => {
    return (
        <div>
            <header>
                <div className="container p-5">
                    <div className="row align-items-center">
                        <div className="col-md-5 text-center color-theme">
                            <h1>
                                Refer Your Freind
                                <br />& Win Upto
                                <br />
                                <span className="text-dark">$2500 </span>Cash
                            </h1>
                            <button className="book-now">Refer Your Freind</button>
                        </div>
                        <div className="col-md-7 text-center">
                            <img src={man_woman} className="img-fluid" alt="" />
                        </div>
                    </div>
                </div>
            </header>

            <section id="contest">
                <div className="p-5 title text-center">
                    <h1 className="fw-bolder">Contest</h1>
                    <p className="small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque, odio.</p>
                </div>

                <div className="container">
                    <div className="shadow mx-auto" id="shadow">
                        <table className="table border table-striped table-light  rounded mb-0   mx-auto">
                            <tr className="border-bottom">
                                <th className="col p-5 pb-3 mb-2 text-start">Weakly Rank</th>
                                <th className="col p-5 pb-3 mb-2 text-end ">Weakly Price</th>
                            </tr>

                            <tr>
                                <td className="ps-5 p-2">1</td>
                                <td className="pe-5 text-end p-2">1100*1</td>
                            </tr>
                            <tr>
                                <td className="ps-5 p-2">2</td>
                                <td className="pe-5 text-end p-2">2100*2</td>
                            </tr>
                            <tr>
                                <td className="ps-5 p-2">3</td>
                                <td className="pe-5 text-end p-2">3100*3</td>
                            </tr>
                            <tr>
                                <td className="ps-5 p-2">4</td>
                                <td className="pe-5 text-end p-2">4100*4</td>
                            </tr>
                            <tr>
                                <td className="ps-5 p-2">5</td>
                                <td className="pe-5 text-end p-2">5100*5</td>
                            </tr>
                            <tr>
                                <td className="ps-5 pb-5 p-2">6</td>
                                <td className="pe-5 pb-5 text-end p-2">6100*6</td>
                            </tr>
                        </table>
                        <h6 className=" mx-auto border border-top-0 p-4 text-center">
                            Winners will be declared every Sunday midnight. <br /> Incase of a tie, the user who referred first will get a better rank
                        </h6>
                    </div>
                </div>
                <div className="p-5"></div>
            </section>
        </div>
    );
};

export default Refer;