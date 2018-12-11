<form id="demo-form" action="https://www.salesforce.com/servlet/servlet.WebToLead?encoding=UTF-8" method="POST">
    <h5>Name</h5>
    
        <input name="oid" type="hidden" value="00D300000000a2c" />
        <input name="retURL" type="hidden" value="http://gracehill.com/events/vantage-download/news#thankyou-vantage" />
        <!--<input type="hidden" name="retURL" value="http://gracehill.com/events/vantage-download/">-->
        <input maxlength="40" name="first_name" required="" size="20" type="text" placeholder="First Name" />
        <input maxlength="80" name="last_name" required="" size="20" type="text" placeholder="Last Name" />
    
    <h5>Contact Information</h5>
    
        <input maxlength="40" name="company" required="" size="20" type="text" placeholder="Company" />
        <input maxlength="80" name="email" required="" size="20" type="text" placeholder="Email" />
   
    
        <input id="phone" maxlength="10" name="phone" required="" size="20" type="text" placeholder="Phone" />
    
    
        <input maxlength="40" name="city" required="" size="20" type="text" placeholder="City" />
        <select id="state" name="state" required="">
            <option value="">None</option>
            <option value="AL">Alabama</option>
            <option value="AK">Alaska</option>
            <option value="AZ">Arizona</option>
            <option value="AR">Arkansas</option>
            <option value="CA">California</option>
            <option value="CO">Colorado</option>
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="DC">District Of Columbia</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="HI">Hawaii</option>
            <option value="ID">Idaho</option>
            <option value="IL">Illinois</option>
            <option value="IN">Indiana</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="MT">Montana</option>
            <option value="NE">Nebraska</option>
            <option value="NV">Nevada</option>
            <option value="NH">New Hampshire</option>
            <option value="NJ">New Jersey</option>
            <option value="NM">New Mexico</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="ND">North Dakota</option>
            <option value="OH">Ohio</option>
            <option value="OK">Oklahoma</option>
            <option value="OR">Oregon</option>
            <option value="PA">Pennsylvania</option>
            <option value="RI">Rhode Island</option>
            <option value="SC">South Carolina</option>
            <option value="SD">South Dakota</option>
            <option value="TN">Tennessee</option>
            <option value="TX">Texas</option>
            <option value="UT">Utah</option>
            <option value="VT">Vermont</option>
            <option value="VA">Virginia</option>
            <option value="WA">Washington</option>
            <option value="WV">West Virginia</option>
            <option value="WI">Wisconsin</option>
            <option value="WY">Wyoming</option>
        </select>
    
    <h5>Current Customer?</h5>
    
        <select id="customer-current" name="current_customer__c" required="">
            <option value="" disabled selected>Select your option</option>
            <option value="true">Yes</option>
            <option value="false">No</option>
        </select>
   
    <h5>Unit Count(Required)</h5>
    <p>Number of total units managed by your organization across all properties.</p>
    
        <select id="units" name="00N30000000m14h" required="">
            <option value=""># of Units</option>
            <option value="250">Less than 250</option>
            <option value="1000">250-1,000</option>
            <option value="2500">1,000-2,500</option>
            <option value="5000">2,500-5,000</option>
            <option value="10000">5,000-10,000</option>
            <option value="max">More than 10,000</option>
        </select>
        <br />
        <input name="lead_source" type="hidden" value="Vantage" />
        <input name="submit" type="submit" />
    
</form>