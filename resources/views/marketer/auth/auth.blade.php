@extends('layouts.app')

@section('style')
    <link rel="stylesheet" href="{{ url('css/checkbox.css') }}">
@endsection

@section('content')
    <section class="registration-marketer">
        <div class="content">
            <div class="registration-title">
                <div class="registration-title-words">
                    <h2>Authentication</h2>
                </div>
            </div>

            <div class="all-content">
                <div class="registration-forms">
                    <form method="POST" action="{{ url('marketer/login') }}" id="login">
                        {{ csrf_field() }}
                        <div class="right-block-forms right-block-forms-out pull-left" id="forms-out">
                            <p class="form-title-sign">Sign in</p>
                            <div class="input-blocks {{ $errors->has('login_email') ? ' has-error' : '' }}">
                                <label for="email-user">E-Mail</label>
                                <input type="email" id="email-user" placeholder="E-Mail" data-value="E-Mail"
                                       name="login_email" value="{{ old('login_email') }}">

                                @if ($errors->has('login_email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('login_email') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="input-blocks {{ $errors->has('login_password') ? ' has-error' : '' }}">
                                <label for="password-user">Password</label>
                                <input type="password" id="password-user" placeholder="Password" data-value="Password"
                                       name="login_password">

                                @if ($errors->has('login_password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('login_password') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <button type="submit" id="submit-login">Login</button>
                        </div>
                    </form>
                    <form method="POST" action="{{ url('marketer/register') }}" id="register"
                          enctype="multipart/form-data">
                        <div class=" pull-right left-block-forms" id="forms-out-register">

                            <p class="form-title-sign">Independent Affiliate Marketer Registration</p>
                            {{ csrf_field() }}


                            <div class="input-blocks">
                                <div style="overflow-y: scroll; height: 400px;">
                                    <h2>Affiliate Marketer Contract</h2>
                                    <p>NOWTHEREFORE, the parties agree as follows:<br>
                                    <br>    
                                    1.  DESCRIPTION OF SERVICES<br>
                                    <br>
                                    (A) Affiliate will have the non-exclusive right to represent Thewisdompreserve.com and to market and sell Thewisdompreserve.com's individual narrative submission services throughout the United States to prospective writers.<br>
                                    <br>

                                    (i) Affiliate will provide the following services:<br>
                                    <br>

                                    a)  Affiliate will be responsible for marketing and promoting the Thewisdompreserve.com’s individual narrative submission services to writers. Any publication and/or distribution of printed material in the promotion of the Thewisdompreserve.com services shall first be approved by Thewisdompreserve.com. The Thewisdompreserve.com name and logo, promotional materials, and information may be used with the approval of Thewisdompreserve.com during the term of this agreement.<br>
                                    b)  Affiliate will collect and convey to Thewisdompreserve.com complete contact information on each prospective writer that it wishes to refer to Thewisdompreserve.com. All marketing contact information will be provided to Thewisdompreserve.com in an electronic format as frequently as referrals are generated. At a minimum, contact information will include a correct name (or pseudonym), physical address, telephone number and e-mail address of the writer.<br>
                                    c)  Affiliate will be financially responsible for all marketing, selling, administrative and other expenses relating to its marketing efforts and will not be reimbursed in any way by thewisdomepreserve.com<br><br>

                                    (ii) Thewisdompreserve.com will provide the following services:<br>
                                    <br>

                                    a)  Thewisdompreserve.com will act promptly to electronically submit marketing and enrollment materials to prospective writers referred by Affiliate and use its best efforts to convert referrals to narratives to be preserved on the website.<br>
                                    b)  Thewisdompreserve.com will track all Affiliate referrals through its database and provide a monthly summary of enrollment activity to Affiliate.<br>
                                    c)  Thewisdompreserve.com shall be responsible for maintaining the website and the narratives submitted by writers referred by Affiliate.<br>
                                    d)  Thewisdompreserve.com shall have the sole right and responsibility for processing all enrollments from referrals generated by Affiliate.<br>

                                    2. COMMISSIONS<br><br>
                                    Thewisdompreserve.com agrees to pay Affiliate a commission of $100 of the gross revenue received by Puppy Drum LLC for each prospective writer referred by Affiliate to the gold plan (i.e., $100 per $499 narrative submission fee) and $55 for each subscription to the silver plan (i.e., $55 per narrative submitted by writer).  Affiliate will NOT earn commission for any other payment by writer to Puppy Drum LLC.  Remuneration from affiliate to internal sales person or external marketing consultant is at the sole discretion of affiliate.<br><br>

                                    Once a writer pays Puppy Drum LLC his/her non-refundable narrative submission fee and; (a) the writer can be verified as a referral from Affiliate through a promotional code generated by thewisdompreserve.com that is entered electronically by the writer at the time of narrative submission; (b) the enrolling writer remits full payment to Thewisdompreserve.com for all charges; (c) the writer does not subsequently cancel the enrollment; (d) and the affiliate has not already received a referral fee or commission in connection with the enrollment.  Gross revenue is defined as total revenue collected by Puppy Drum LLC from an enrolling writer for a submission of a written narrative by writer to thewisdompreserve.com.<br><br>

                                    Thewisdompreserve.com shall pay commissions due to Affiliate on a monthly basis within 20 days of the end of each calendar month. No credit will be given for referrals that have been referred from another source or are already in thewisdompreserve.com database since these will have been assigned a different promotional code.<br><br>

                                    Affiliate shall be solely responsible for all payments due to any individual or organization which may perform work on behalf of the Affiliate or with whom Affiliate arranges to share commissions. Thewisdompreserve.com shall have no direct or implied relationship with any individual or entity associated with Affiliate, nor any responsibility to provide service to these independent entities.<br><br>

                                    3. INITIAL TERM<br><br>
                                    The term of this Agreement shall be from the date hereof through three years after the signing by affiliate of this contract.  This is subject to renewal as provided in Section 4 below (the "Term").<br><br>

                                    4. EXTENSION OF TERM<br><br>
                                    The term of this agreement may be renewed for an additional one-year period (the “Extension Term”), by mutual agreement of the parties. The addition of an Extension Term shall be documented by a written amendment to this Agreement, executed by both parties.<br><br>

                                    5. TERMINATION<br><br>
                                    This agreement may be terminated by thewisdompreserve.com and Puppy Drum LLC for any reason with 7 days written notice.<br><br> 

                                    6. OWNERSHIP/INTELLECTUAL PROPERTY/NON-COMPETE<br><br>

                                    All content and improvements to Thewisdompreserve.com’s marketing materials are the sole property of Thewisdompreserve.com. This shall apply with respect to Thewisdompreserve.com’s copyrightable works, ideas, discoveries, inventions, applications for patents, and patents, any improvements, further inventions or improvements, and any new items discovered or developed by Thewisdompreserve.com during the term of this Agreement. Affiliate shall sign all documents necessary to perfect the rights of Thewisdompreserve.com in such intellectual property, but will not be liable for any costs associated with perfecting the rights of thewisdompreserve.com in said property.  As such, affiliate will not directly or indirectly compete with the wisdompreserve.com for the three year term of this contract.  Moreover, the spirit and letter of this arrangement is for affiliate to be beholden to the interests of thewidsompreserve.com exclusively and be the sole outlet for services of the nature of those offered by the wisdomrpreserve.com.<br><br>

                                    7. EXPENSE REIMBURSEMENT<br><br>

                                    Affiliate shall pay all “out-of-pocket” expenses related to its marketing efforts (see paragraph 1, “Description of Services” above), and shall not be entitled to reimbursement from Thewisdompreserve.com unless mutually agreed by both parties.<br><br>

                                    8. RELATIONSHIP OF PARTIES<br><br>

                                    This Agreement does not constitute either party an agent, legal representative, joint venture partner, partner, or employee of the other for any purpose whatsoever and, neither party is in any way authorized to make any contract, agreement, warranty or representation or to create any obligations, express or implied, on behalf of the other party hereto.<br><br>

                                    9. GOVERNING POLICIES AND PROCEDURES<br><br>
                                    All Thewisdompreserve.com rules, policies, and operating procedures concerning customer orders, customer service, customer data, and product sales will apply to writers and prospects referred by Affiliate.<br><br>

                                    10. LEGAL REQUIREMENTS<br><br>

                                    Affiliate and Thewisdompreserve.com agree to obtain and maintain all permits, licenses and consents (governmental and otherwise) that are necessary or advisable for providing the services described in Section 1 above and further, in providing the services described in Section I above, to comply with all applicable legal requirements.<br><br>

                                    11. INDEMNIFICATION<br><br>
                                    (a) Affiliate agrees to indemnify Thewisdompreserve.com, together with the officers, Directors, and employees of Thewisdompreserve.com, and defend and hold them harmless from and against all claims, losses, causes of action, liabilities, damages and expenses (including, without limitation, reasonable attorneys' fees) directly arising from, incurred as a consequence of or otherwise directly attributable to the gross negligence of Affiliate in connection with the Services being provided in this Agreement.<br><br>

                                    12. ASSlGNMENT<br><br>

                                    Neither party's obligation under this Agreement may be assigned or transferred to any other person, firm, or corporation without the prior written consent of the other party, provided that thewisdompreserve.com’s approval of Affiliate’s transfer or assignment shall be based upon Thewisdompreserve.com’s determination, in its reasonable discretion, that Affiliate’s transferee or assignee has the requisite experience, resources, and financial stability to fulfill the obligations of Affiliate under this Agreement, and that the transfer will not create a conflict of interest with Thewisdompreserve.com’s corporate goals. Thewisdompreserve.com may, however, assign this Agreement without consent of Affiliate in connection with a merger, consolidation, acquisition or sale of substantially all of its assets or stock, or substantially all of the assets of the division of its business.<br><br>

                                    13. CONFIDENTIALITY<br><br>
                                    Except as otherwise provided in this Agreement or with the consent of the other party hereto, each of the parties agrees that all information including, without limitation, the terms of this Agreement, business and financial information, customer and vendor lists and pricing and sales information, concerning either party, or any of their respective affiliates, provided by or on behalf of any of them shall remain strictly confidential and secret and shall not be utilized, directly or indirectly by the party receiving such information for its own business purposes or for any other purpose, except and solely to the extent that any such information is generally known or available to the public  through a source or sources other than such party hereto or its affiliates.<br><br>

                                    14. SURVIVAL<br><br>

                                    The confidentiality provisions of this Agreement shall remain in full force and effect after the termination of this Agreement.<br><br>

                                    15. NOTICES<br><br>
                                    All notices required and permitted under this Agreement shall be in writing and shall be delivered in electronic form.  Affiliate therefore must retain a working email account with the wisdompreserve.com<br><br>

                                    16. ENTIRE AGREEMENT<br><br>
                                    This Agreement contains the entire agreement of the parties and there are no other promises or conditions in any other agreement whether oral or written. This Agreement supersedes any prior written or oral agreements between the parties. Agreement is five (5) electronic pages in length including signature page.<br><br>

                                    17. AMENDMENT<br><br>
                                    This Agreement may be modified or amended if the amendment is made in writing and is signed by both parties.<br><br>

                                    18. SEVERABILITY<br><br>
                                    If any provision of this Agreement shall be held to be invalid or unenforceable for any reason, the remaining provisions shall continue to be valid and enforceable. If a Court finds that any provision of this Agreement is invalid or unenforceable, but that by limiting such provision it would become valid and enforceable then such provision shall be deemed to be written construed and enforced as so limited.<br><br>

                                    19. WAIVER OF CONTRACTUAL RIGHT<br><br>

                                    The failure of either party to enforce any provision of the Agreement shall not be construed as a waiver or limitation of that party's right to subsequently enforce and compel strict compliance with every provision of this Agreement.<br><br>

                                    20. APPLICABLE LAW<br><br>
                                    This Agreement shall be governed by the laws of the State of Virginia, United States of America.<br><br>

                                    21. COUNTERPARTS<br><br>
                                    This Agreement may be signed, and is intended to be signed, electronically.  The signature produced below become binding and have the same effect as if the signatures upon any counterpart were upon the same instrument and signed by hand. All signed counterparts shall be deemed to be an original.<br><br></p>
                                </div>
                                
                            </div>
                            <div class="input-blocks {{ $errors->has('reg_name') ? ' has-error' : '' }}">
                                <label for="name-user">Name</label>
                                <input type="text" id="name-user" placeholder="Name" lian="22" data-value="Name"
                                       name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="input-blocks {{ ($errors->has('email') || isset($email_error))? ' has-error' : '' }}">
                                <label for="email-user">E-Mail</label>
                                <input type="email" id="email-user" placeholder="E-Mail" data-value="E-Mail"
                                       name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @elseif(isset($email_error))
                                    <span class="help-block">
                                        <strong>{{ $email_error }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="input-blocks {{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password-user">Password</label>
                                <input type="password" id="password-user" placeholder="Password" data-value="Password"
                                       name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="input-blocks {{ $errors->has('password_confirmation') ? ' has-error' : '' }} ">
                                <label for="password-user-confirm">Confirm Password</label>
                                <input type="password" id="password-user-confirm" placeholder="Confirm Password"
                                       data-value="Confirm Password" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="input-blocks">
                                <p style="width: 100%; height: 50px; border: none; font-size: 24px; color: #6c6c6c; padding-left: 20px;">By selecting register I agree to all terms and conditions in the Affiliate Marketer Contract</a></p>
                            </div>


                            <button type="submit" id="submit">Register</button>

                        </div>
                    </form>


                </div>
            </div>

        </div>

        </div>

        </div>
    {{--<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">--}}
    {{--Launch demo modal--}}
    {{--</button>--}}

    <!-- Modal -->
        {{--<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="margin-top: 50px">--}}
        {{--<div class="modal-dialog" role="document">--}}
        {{--<div class="modal-content">--}}
        {{--<div class="modal-header">--}}
        {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
        {{--<span aria-hidden="true">&times;</span>--}}
        {{--</button>--}}
        {{--<h4 class="modal-title" id="myModalLabel">Modal title</h4>--}}
        {{--</div>--}}
        {{--<div class="modal-body">--}}
        {{--Contact --}}
        {{--</div>--}}
        {{--<div class="modal-footer">--}}
        {{--<button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
    </section>
@endsection

@section('script')
    <script src="{{ url('js/footer.js') }}"></script>
    <script>
        (function () {
            var fileToUpload = [];
            var contract = $("#terms");

            contract.on('change', FileSelectHandler);
            function FileSelectHandler(e) {
                var file = e.target.files || e.dataTransfer.files;
                if (file.length != 0) {
                    fileToUpload.push(file);
                    $('#contract-label').html(file[0].name);
                }
                else{
                    $('#contract-label').html("Upload Contract");
                }
            }


        })();
    </script>
@endsection

