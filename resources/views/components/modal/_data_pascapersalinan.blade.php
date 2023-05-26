<div class="modal fade action-sheet" id="pascaPersalinan" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Exchange Money</h5>
            </div>
            <div class="modal-body">
                <div class="action-sheet-content">
                    <form>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="currency1">From</label>
                                        <select class="form-control custom-select" id="currency1">
                                            <option value="1">EUR</option>
                                            <option value="2">USD</option>
                                            <option value="3">AUD</option>
                                            <option value="4">CAD</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group basic">
                                    <div class="input-wrapper">
                                        <label class="label" for="currency2">To</label>
                                        <select class="form-control custom-select" id="currency2">
                                            <option value="1">USD</option>
                                            <option value="1">EUR</option>
                                            <option value="2">AUD</option>
                                            <option value="3">CAD</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group basic">
                            <label class="label">Enter Amount</label>
                            <div class="input-group mb-2">
                                <span class="input-group-text" id="basic-addon2">$</span>
                                <input type="text" class="form-control" placeholder="Enter an amount"
                                    value="100">
                            </div>
                        </div>



                        <div class="form-group basic">
                            <button type="button" class="btn btn-primary btn-block btn-lg"
                                data-bs-dismiss="modal">Exchange</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>