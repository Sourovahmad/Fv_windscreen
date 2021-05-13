import React from 'react';

const ReferAndGetFree = () => {
    return (
        <div>
            <div className="" id="refer-getfree">
                <div className="container py-5">
                    <div className="text-center">
                        <h3>Refer and get free services</h3>
                        <p className="w-75 mx-auto small">Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi recusandae sed doloribus vitae impedit sit necessitatibus, ipsa rem quas accusantium?</p>

                        <div className="w-50 mx-auto">
                            <div class="input-group mb-3">
                                <span class="input-group-text p-0" id="basic-addon1">
                                    <div class="dropdown">
                                        <button class="btn btn-secondary dropdown-toggle rounded-0 rounded-left " type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            Dropdown button
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    Action
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    Another action
                                                </a>
                                            </li>
                                            <li>
                                                <a class="dropdown-item" href="#">
                                                    Something else here
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </span>
                                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
};

export default ReferAndGetFree;