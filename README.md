# Price Table with ACF

This code dynamically generates a price table using custom fields created with the Advanced Custom Fields (ACF) plugin in WordPress. Follow the instructions below to set up the ACF fields required for the template to function correctly.

## Prerequisites
- **WordPress** installed
- **ACF Plugin** installed and activated (either free or PRO version)
- Basic knowledge of WordPress theme development

## ACF Field Setup

### Step 1: Create a Repeater Field Group for the Price Table
1. Navigate to **Custom Fields > Add New** in your WordPress admin dashboard.
2. Title your field group **Price Table**.

#### Field 1: Repeater Field `price_table`
- **Label**: Price Table
- **Field Name**: `price_table`
- **Field Type**: Repeater
    - **Sub-fields**:
        1. **Title**: Service Title
            - **Field Name**: `title`
            - **Field Type**: Text
        2. **Title**: Price
            - **Field Name**: `price`
            - **Field Type**: Number
        3. **Title**: Subtitle
            - **Field Name**: `subtitle`
            - **Field Type**: Text
        4. **Title**: Plan Includes (Repeater)
            - **Field Name**: `plan_includes`
            - **Field Type**: Repeater
            - **Sub-fields**:
                1. **Title**: Designed
                    - **Field Name**: `designed`
                    - **Field Type**: Text
                2. **Title**: Production (Hourly Rate)
                    - **Field Name**: `production`
                    - **Field Type**: Number
        5. **Title**: Option Section (Repeater)
            - **Field Name**: `option_section`
            - **Field Type**: Repeater
            - **Sub-fields**:
                1. **Title**: Option Item
                    - **Field Name**: `option_item`
                    - **Field Type**: Text

3. Set **Location** rules to display this field group on the desired page or template:
    - **Show this field group if**: Page is equal to the specific page where the price table will be displayed.

4. Click **Publish** to save the field group.

### Step 2: Adding the Template Code
- Add the refactored code in the respective WordPress template file where you want to display the price table.
- Make sure that ACF fields are assigned and populated before using the template.

### Step 3: Populate Data
1. Navigate to the page where you've applied the ACF field group.
2. Add your service titles, prices, subtitles, and any options using the repeater fields.

### Example of ACF Fields Structure:
- **Service Title**: "Basic Package"
- **Price**: 299
- **Subtitle**: "Best for small businesses"
- **Plan Includes**:
    - **Designed**: "Responsive Design"
    - **Production**: 50
- **Option Section**:
    - **Option Item**: "24/7 Support"
    - **Option Item**: "1 Year Free Maintenance"

Repeat this structure for multiple services (as many as needed).

## Notes
- Ensure that you have properly set up ACF fields and attached them to the correct page or post where the pricing table will appear.
- The PHP code uses ACF's `have_rows()` and `get_sub_field()` to dynamically populate the price table from the fields.

## License
This project is licensed under the MIT License.
