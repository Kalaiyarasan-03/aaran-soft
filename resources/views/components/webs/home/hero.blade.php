<div class="flex flex-col sm:flex-row justify-between items-center p-5 bg-gradient-to-r from-cyan-100 to-blue-300">

    <x-storyset.programer/>

    <div
        class="w-full animate__animated wow animate__fadeInDown  p-5 ">

        <div class="relative inline-block">
            <span class=" text-3xl md:text-6xl font-bold font-serif animate__animated wow animate__fadeOut">
                CODEXSUN
            </span>
            <span
                class="absolute -bottom-1 left-0 w-full h-1 bg-gradient-to-r from-red-500 via-orange-400 to-yellow-600 rounded-full"></span>
        </div>

        <h1 class="text-zinc-400 py-3 text-lg font-semibold">Software make simple</h1>

        <h1 class="mb-5 font-extrabold text-2xl sm:text-4xl text-zinc-500">Manage your business like never
            before</h1>

        <p class="py-2 font-light tracking-widest text-zinc-500 text-balance max-w-5xl">
            The perfect key for unlocking business growth is Infusing Intelligence to your business.
            Start getting complete business solution package with end-to-end management.</p>

        <a
            href="{{ route('demo-requests.upsert') }}"
            class="animate-pulse focus:animate-none hover:animate-none inline-flex text-2xl bg-green-600 px-4 py-2 mt-3 rounded-lg cursor-pointer
                    tracking-wide text-white font-mono font-bold">
            <span class="px-5"> Book for demo</span>
            <x-icons.elements :icon="'notebook'" class="w-10 h-auto block"/>
        </a>

    </div>
</div>
<div class="mt-16  mx-auto w-3/4">
    <h2 class="text-5xl text-center font-serif font-bold">
        All-in-one billing software to help grow
    </h2>
    <h2 class="text-5xl text-center font-serif font-bold mt-2">
        your business
    </h2>
    <!-- Tab Buttons -->
    <div class="p-2 mt-4 text-center text-gray-500 bg-gray-100 rounded-full mx-auto w-full">
        <div class="flex justify-center space-x-4 w-full gap-4">
            <button class="px-4 w-52 rounded-full text-gray-600 py-4 font-semibold border-b-4 border-blue-700 hover:bg-[#4299e1] focus:outline-none tab-button" onclick="showTab('tab1')">Billing</button>
            <button class="px-4 w-72 rounded-full bg-white shadow hover:text-indigo-900 py-4 font-semibold border-b-4 border-blue-700 hover:bg-[#4299e1] focus:outline-none tab-button" onclick="showTab('tab2')">Inventory Management</button>
            <button class="px-4 w-72 rounded-full py-4 font-semibold border-b-4 border-blue-700 hover:bg-[#4299e1] focus:outline-none tab-button" onclick="showTab('tab3')">Business Management</button>
            <button class="px-4 w-72 rounded-full py-4 font-semibold border-b-4 border-blue-700 hover:bg-[#4299e1] focus:outline-none tab-button" onclick="showTab('tab4')">Bonus Features</button>
        </div>
    </div>

    <!-- Tab Content -->
    <div id="tab1" class="p-4 tab-content bg-white shadow-md rounded-lg grid grid-rows-2 grid-cols-3 mx-auto justify-items-center">
        <div class="grid-cols-1 border border-b-gray-500 bg-gray-200 rounded-xl mt-10 m-4">
            <img class="feature" data-src="/static-assets/images/landing-page-v2/automatic-invoice.webp" alt="Automatic GST Bill Sharing on Whatsapp/SMS" src="../../../../images/automatic-invoice.webp">
            <div class="border-gray-400 bg-white p-2 font-bold font-serif">Automatic invoice sharing on SMS &amp; Whatsapp</div>
        </div>
        <div class="grid-cols-2 border border-b-gray-500 bg-gray-200 rounded-xl mt-10 m-4">
            <img class="feature" data-src="/static-assets/images/landing-page-v2/sales-purchase.webp" alt="Sales &amp; Purchase Invoices, Expense Tracking" src="../../../../images/sales-purchase.webp">
            <div class="border-gray-400 bg-white p-2 font-bold font-serif">Sales Purchase and Expenses</div>
        </div>
        <div class="grid-cols-3 border border-b-gray-500 bg-gray-200 rounded-xl mt-10 m-4">
            <img class="feature"  data-src="/static-assets/images/landing-page-v2/quotation-proforma.webp" alt="Create Quotations/Estimates &amp; Proforma Invoices" src="../../../../images/quotation-proforma.webp">
            <div class="border-gray-400 bg-white p-2 font-bold font-serif">Quotations Estimates &amp; Proforma Invoices</div>
        </div>
        <div class=" border border-b-gray-500 bg-gray-200 rounded-xl mt-10 m-4">
            <img class="feature" height="256" data-src="/static-assets/images/landing-page-v2/online-offline.webp" alt="Billing Software that works with/without internet" src="../../../../images/online-offline.webp">
            <div class="border-gray-400 bg-white p-2 font-bold font-serif">Online &amp; Offline Billing</div>
        </div>
        <div class=" border border-b-gray-500 bg-gray-200 rounded-xl mt-10 m-4">
            <img class="feature" height="256" data-src="/static-assets/images/landing-page-v2/pos-billing.webp" alt="POS Billing Software Free" src="../../../../images/pos-billing.webp">
                <div class="border-gray-400 bg-white p-2 font-bold font-serif">POS Billing</div>
        </div>
        <div class="border border-b-gray-500 bg-gray-200 rounded-xl mt-10 m-4">
            <img class="feature" height="256" data-src="/static-assets/images/landing-page-v2/delivery-challan.webp" alt="Create Delivery Challan" src="../../../../images/delivery-challan.webp">
                <div class="border-gray-400 bg-white p-2 font-bold font-serif">Delivery Challan</div>
        </div>
    </div>
    <div id="tab2" class="p-4 tab-content bg-white shadow-md rounded-lg hidden grid grid-rows-2 grid-cols-3">
        <div class="grid-cols-1 border border-b-gray-500 bg-gray-200 rounded-xl mt-10 m-4">
            <img class="feature" height="256" data-src="/static-assets/images/landing-page-v2/manage-stocks.webp" alt="Inventory Management Software" src="../../../../images/manage-stocks.webp">
            <div class="border-gray-400 bg-white p-2 font-bold font-serif">Manage Stock Items</div>
        </div>
        <div class="border border-b-gray-500 bg-gray-200 rounded-xl mt-10 m-4">
            <img class="feature" height="256" data-src="/static-assets/images/landing-page-v2/godown.webp" alt="Godown Management Billing Software" src="../../../../images/godown.webp">
            <div class="border-gray-400 bg-white p-2 font-bold font-serif">Godown Management</div>
        </div>
        <div class="border border-b-gray-500 bg-gray-200 rounded-xl mt-10 m-4">
            <img class="feature" height="256" data-src="/static-assets/images/landing-page-v2/batching.webp" alt="Product Batching Feature" src="../../../../images/batching.webp">
            <div class="border-gray-400 bg-white p-2 font-bold font-serif">Batching</div>
        </div>
        <div class="border border-b-gray-500 bg-gray-200 rounded-xl mt-10 m-4">
            <img class="feature" height="256" data-src="/static-assets/images/landing-page-v2/serialisation.webp" alt="Add Serial Number for easy product tracking" src="../../../../images/serialisation.webp">
            <div class="border-gray-400 bg-white p-2 font-bold font-serif">Serialisation</div>
        </div>
        <div class=" border border-b-gray-500 bg-gray-200 rounded-xl mt-10 m-4">
            <img class="feature" height="256" data-src="/static-assets/images/landing-page-v2/barcodes.webp" alt="Create and Print Barcodes" src="../../../../images/barcodes.webp">
            <div class="border-gray-400 bg-white p-2 font-bold font-serif">Generate and Print Barcodes</div>
        </div>
        <div class="border border-b-gray-500 bg-gray-200 rounded-xl mt-10 m-4">
            <img class="feature" height="256" data-src="/static-assets/images/landing-page-v2/custom-fields.webp" alt="Add custom fields for easy inventory management" src="../../../../images/custom-fields.webp">
            <div class="border-gray-400 bg-white p-2 font-bold font-serif">Inventory Custom Fields</div>
        </div>
    </div>
    <div id="tab3" class="p-4 tab-content bg-white shadow-md rounded-lg hidden grid grid-rows-2 grid-cols-3">
        <div class="border border-b-gray-500 bg-gray-200 rounded-xl mt-10 m-4">
            <img class="feature" height="256" data-src="/static-assets/images/landing-page-v2/multiple-device.webp" alt="Access myBillBook on multiple devices" src="../../../../images/Sign up-bro.png">
            <div class="border-gray-400 bg-white p-2 font-bold font-serif">Multiple Device Login</div>
        </div>
        <div class="border border-b-gray-500 bg-gray-200 rounded-xl mt-10 m-4 h-72">
            <img class="feature" height="256" data-src="/static-assets/images/landing-page-v2/multiple-business.webp" alt="Manage Multiple Businesses with one Invoicing Software" src="../../../../images/multiple-business.webp">
            <div class="border-gray-400 bg-white p-1 font-bold font-serif">Multiple Businesses</div>
        </div>
        <div class="border border-b-gray-500 bg-gray-200 rounded-xl mt-10 m-4 h-72">
            <img class="feature" height="256" data-src="/static-assets/images/landing-page-v2/multiple-users.webp" alt="Provide access to multiple users" src="../../../../images/multiple-users.webp">
            <div class="border-gray-400 bg-white p-1 font-bold font-serif">Multiple Users</div>
        </div>
        <div class="border border-b-gray-500 bg-gray-200 rounded-xl mt-10 m-4 h-72">
            <img class="feature" height="256" data-src="/static-assets/images/landing-page-v2/user-role.webp" alt="Create different user roles" src="../../../../images/user-role.webp">
            <div class="border-gray-400 bg-white p-1 font-bold font-serif">User Role Settings</div>
        </div>
        <div class="border border-b-gray-500 bg-gray-200 rounded-xl mt-10 m-4 h-72">
            <img class="feature" height="256" data-src="/static-assets/images/landing-page-v2/staff-attendance.webp" alt="Staff Attendance and Payroll Management" src="../../../../images/staff-attendance.webp">
            <div class="border-gray-400 bg-white p-1 font-bold font-serif">Staff Attendance and Payroll</div>
        </div>
        <div class="border border-b-gray-500 bg-gray-200 rounded-xl mt-10 m-4 h-72">
            <img class="feature" height="256" data-src="/static-assets/images/landing-page-v2/business-reports.webp" alt="Billing Software that Generates Business Reports for free" src="../../../../images/business-reports.webp">
            <div class="border-gray-400 bg-white p-1 font-bold font-serif">Business Reports</div>
        </div>
    </div>
    <div id="tab4" class="p-4 tab-content bg-white shadow-md rounded-lg hidden grid grid-rows-2 grid-cols-3">
        <div class="border border-b-gray-500 bg-gray-200 rounded-xl mt-10 m-4">
                <img class="feature" height="256" data-src="/static-assets/images/landing-page-v2/multiple-bank-accounts.webp" alt="Multiple Bank Account Management" src="../../../../images/multiple-bank-accounts.webp">
                <div class="border-gray-400 bg-white p-2 font-bold font-serif">Multiple Bank Account</div>
        </div>
        <div class="border border-b-gray-500 bg-gray-200 rounded-xl mt-10 m-4">
            <img class="feature" height="256" data-src="/static-assets/images/landing-page-v2/recover-deleted-invoices.webp" alt="Recover Deleted Invoices for better Invoice Management" src="../../../../images/recover-deleted-invoices.webp">
            <div class="border-gray-400 bg-white p-2 font-bold font-serif">Recover Deleted Invoices</div>
        </div>

        <div class="border border-b-gray-500 bg-gray-200 rounded-xl mt-10 m-4">
            <img class="feature" height="256" data-src="/static-assets/images/landing-page-v2/bulk-upload.webp" alt="Bulk Upload/ Edit Invoices" src="../../../../images/bulk-upload.webp">
            <div class="border-gray-400 bg-white p-2 font-bold font-serif">Bulk Upload/ Edit</div>
        </div>
        <div class="border border-b-gray-500 bg-gray-200 rounded-xl mt-10 m-4">
                <img class="feature" height="256" data-src="/static-assets/images/landing-page-v2/automated-billing.webp" alt="Automated Billing for recurring invoices" src="../../../../images/automated-billing.webp">
                <div class="border-gray-400 bg-white p-2 font-bold font-serif">Automated Billing</div>
        </div>
        <div class="border border-b-gray-500 bg-gray-200 rounded-xl mt-10 m-4">
            <img class="feature" height="256" data-src="/static-assets/images/landing-page-v2/foreign-currency.webp" alt="Create Invoices in Foreign Currency" src="../../../../images/foreign-currency.webp">
            <div class="border-gray-400 bg-white p-2 font-bold font-serif">Foreign Currency</div>
        </div>

        <div class="border border-b-gray-500 bg-gray-200 rounded-xl mt-10 m-4">
            <img class="feature" height="256" data-src="/static-assets/images/landing-page-v2/audit.webp" alt="Track Invoice Edit History" src="../../../../images/audit.webp">
            <div class="border-gray-400 bg-white p-2 font-bold font-serif">Audit Trail</div>
        </div>
    </div>

</div>

<div class="w-full mt-20  mx-auto">
    <h2 class="text-4xl font-extrabold font-serif text-center">
        Experience Effortless GST Compliance
    </h2>
    <h2 class="text-4xl font-extrabold font-serif text-center mt-2">
        with Invoicing Software
    </h2>
    <!-- Tab Buttons -->
    <div class="bg-gray-200 p-2 mt-3 rounded-t-lg  grid-rows-4 w-3/4 mx-auto">
        <div class="flex w-72 space-x-4 grid grid-rows-4 gap-5 mt-3">
            <button class="px-4 py-4 grid-rows-1 ml-2 rounded-xl text-gray-900 font-semibold border-b-4 bg-white hover:bg-blue-500 tab-button" onclick="showTab('tab1')">
                <div class="flex ">
                    <img  data-src="/static-assets/icons/gstr-filing.svg" alt="GSTR Filing" src="../../../../images/gstr-filing.svg">
                    <h3 class="text-2xl ml-3">GSTS Filing</h3>
                </div>

            </button>
            <button class="px-4 py-4 grid-rows-2 rounded-xl text-gray-900 font-semibold border-b-4 b hover:bg-blue-500 bg-white tab-button" onclick="showTab('tab2')">
                <div class="flex">
                    <img data-src="/static-assets/icons/e-invoicing.svg" alt="E-Invoicing" src="../../../../images/e-invoicing.svg">
                    <h3 class="text-2xl ml-3">E-Invoicing</h3>
                </div>
            </button>
            <button class="px-4 py-4 grid-rows-3 rounded-xl text-gray-900 font-semibold border-b-4 bg-white hover:bg-blue-500 tab-button" onclick="showTab('tab3')">
                <div class="flex">
                    <img data-src="/static-assets/icons/e-way-billing.svg" alt="E-way Billing" src="../../../../images/e-way-billing.svg">
                    <h3 class="text-2xl ml-3">E-way Billing</h3>
                </div>
            </button>
            <button class="px-4 py-4 grid-rows-4 rounded-xl text-gray-900 font-semibold border-b-4 bg-white hover:bg-blue-500 tab-button" onclick="showTab('tab4')">
                <div class="flex">
                    <img data-src="/static-assets/icons/data-export.svg" alt="Easily Export Billing Data to Tally" src="../../../../images/data-export.svg">
                    <h3 class="text-2xl ml-2">Data Export to Tally</h3>
                </div>
            </button>
        </div>
    </div>

    <!-- Tab Content -->
    <div id="card1" class="p-4 tab-content bg-blue-500 shadow-md rounded-lg w-3/4 grid grid-cols-2">
        <div id="gstr-filing" class="gst-feature-description active grid-cols-2 ">
            <img data-src="/static-assets/images/landing-page-v2/gst-filing.webp" alt="Easy GST Return Filing" class="gst-imgage" src="/static-assets/images/landing-page-v2/gst-filing.webp">
            <div class="gst-feature-description-text grid-cols-2">
                Export your GSTR1 data in a simple format (JSON) and easily file your GST returns. Also, get GSTR-2 and GSTR-3B reports that would help you/your CAs in easy GST tax filing.
                <button id="get-started-gst-feature-cta" class="get-started-btn" onclick="showLogin(false); showLoginEvent('Login/Register', 'GSTR Filing', trackingEventAttributeType, 'gst_features')">
                    Get Started Now
                    <img data-src="/static-assets/icons/ic-arrow-narrow-right.svg" width="20" height="20" alt="Arrow Right" src="/static-assets/icons/ic-arrow-narrow-right.svg">
                </button>
            </div>
        </div>
    </div>
    <div id="card2" class="p-4 tab-content bg-white shadow-md rounded-lg hidden">
        <h2 class="text-2xl font-semibold mb-2 text-blue-700">Tab 2 Content</h2>
        <p>Phasellus eget euismod libero, nec ullamcorper justo. Phasellus eget euismod libero, nec ullamcorper justo.
            Phasellus eget euismod libero, nec ullamcorper justo. Etiam eget augue in ante gravida facilisis.</p>
    </div>
    <div id="card3" class="p-4 tab-content bg-white shadow-md rounded-lg hidden">
        <h2 class="text-2xl font-semibold mb-2 text-blue-700">Tab 3 Content</h2>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium. Sed ut
            perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium. Sed ut perspiciatis
            unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
    </div>

</div>

{{--<script>--}}
{{--    function showCard(cardId) {--}}
{{--        // Hide all tab content--}}
{{--        const tabContents = document.querySelectorAll('.tab-content');--}}
{{--        tabContents.forEach((content) => {--}}
{{--            content.classList.add('hidden');--}}
{{--        });--}}

{{--        // Show the selected tab content--}}
{{--        const selectedCard = document.getElementById(cardId);--}}
{{--        if (selectedCard) {--}}
{{--            selectedCard.classList.remove('hidden');--}}
{{--        }--}}

{{--        // Remove the 'active' class from all tab buttons--}}
{{--        const cardButtons = document.querySelectorAll('.tab-button');--}}
{{--        cardButtons.forEach((button) => {--}}
{{--            button.classList.remove('active');--}}
{{--        });--}}

{{--        // Add the 'active' class to the clicked tab button--}}
{{--        const clickedButton = document.querySelector(`[onclick="showCard('${cardId}')"]`);--}}
{{--        if (clickedButton) {--}}
{{--            clickedButton.classList.add('active');--}}
{{--        }--}}
{{--    }--}}

{{--    // Initialize the first tab--}}
{{--    showTab('card1');--}}
{{--</script>--}}

<style>
    .tab-button.active {
        background-color: #fff;
        border-color: #4299e1;
        color: #4299e1;
    }
</style>

<script>
    function showTab(tabId) {
        // Hide all tab content
        const tabContents = document.querySelectorAll('.tab-content');
        tabContents.forEach((content) => {
            content.classList.add('hidden');
        });

        // Show the selected tab content
        const selectedTab = document.getElementById(tabId);
        if (selectedTab) {
            selectedTab.classList.remove('hidden');
        }

        // Remove the 'active' class from all tab buttons
        const tabButtons = document.querySelectorAll('.tab-button');
        tabButtons.forEach((button) => {
            button.classList.remove('active');
        });

        // Add the 'active' class to the clicked tab button
        const clickedButton = document.querySelector(`[onclick="showTab('${tabId}')"]`);
        if (clickedButton) {
            clickedButton.classList.add('active');
        }
    }

    // Initialize the first tab
    showTab('tab1');
</script>
