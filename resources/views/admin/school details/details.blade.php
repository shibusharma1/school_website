@extends('layout.admin.app')
@section('page-heading', 'Setting')
@section('contents')


 <style>
        /* Reset styles */
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #f5f7fa;
            color: #333;
            line-height: 1.6;
            padding: 20px;
        }
        
        /* detailcontainer = main white card */
        .detailcontainer {
            max-width: 1000px;
            margin: 0 auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        
        /* detailheader = gradient top bar */
        .detailheader {
            background: linear-gradient(135deg, #4a6fa5, #2c3e50);
            color: white;
            padding: 25px;
            text-align: center;
        }
        
        .detailheader h1 {
            margin-bottom: 10px;
            font-weight: 600;
        }
        
        .detailheader p {
            opacity: 0.9;
        }
        
        /* detailform-container = padding inside form */
        .detailform-container {
            padding: 30px;
        }
        
        /* detailform-section = grouped fields */
        .detailform-section {
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }
        
        .detailform-section h2 {
            color: #4a6fa5;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #4a6fa5;
            display: inline-block;
        }
        
        /* detailform-row = row of inputs */
        .detailform-row {
            display: flex;
            flex-wrap: wrap;
            margin: 0 -10px 15px;
        }
        
        /* detailform-group = single input */
        .detailform-group {
            flex: 1 0 300px;
            padding: 0 10px;
            margin-bottom: 15px;
        }
        
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #555;
        }
        
        .detailrequired:after {
            content: " *";
            color: #e74c3c;
        }
        
        input, textarea {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            transition: border 0.3s;
        }
        
        input:focus, textarea:focus {
            outline: none;
            border-color: #4a6fa5;
            box-shadow: 0 0 0 2px rgba(74, 111, 165, 0.2);
        }
        
        /* detailsocial-input = icon + input */
        .detailsocial-input {
            display: flex;
            align-items: center;
        }
        
        .detailsocial-input i {
            background: #f5f7fa;
            padding: 12px;
            border: 1px solid #ddd;
            border-right: none;
            border-radius: 5px 0 0 5px;
            color: #4a6fa5;
            min-width: 45px;
            text-align: center;
        }
        
        .detailsocial-input input {
            border-radius: 0 5px 5px 0;
        }
        
        /* detailfile-input = upload box */
        .detailfile-input {
            padding: 10px;
            background: #f5f7fa;
            border: 1px dashed #ccc;
            text-align: center;
            cursor: pointer;
            transition: background 0.3s;
        }
        
        .detailfile-input:hover {
            background: #e8f0fe;
        }
        
        /* detailbutton = submit */
        .detailbutton {
            background: #4a6fa5;
            color: white;
            border: none;
            padding: 15px 30px;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s;
            display: block;
            margin: 20px auto;
            font-weight: 500;
        }
        
        .detailbutton:hover {
            background: #3a5a80;
        }
        
        /* detailform-note = small hint */
        .detailform-note {
            font-size: 14px;
            color: #777;
            margin-top: 5px;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .detailform-group {
                flex: 1 0 100%;
            }
            
            .detailform-container {
                padding: 20px;
            }
        }
    </style>

    <!-- Main wrapper -->
    <div class="detailcontainer">
        <!-- Header -->
        <div class="detailheader">
            <h1><i class="fas fa-school"></i> School Information Form</h1>
            <p>Please provide your school's details below</p>
        </div>
        
        <div class="detailform-container">
            <form id="schoolForm">
                <!-- Basic Information -->
                <div class="detailform-section">
                    <h2>Basic Information</h2>
                    
                    <div class="detailform-row">
                        <div class="detailform-group">
                            <label for="schoolName" class="detailrequired">School Name</label>
                            <input type="text" id="schoolName" name="schoolName" required placeholder="Enter school name">
                        </div>
                        
                        <div class="detailform-group">
                            <label for="establishedDate">Established Date</label>
                            <input type="date" id="establishedDate" name="establishedDate">
                        </div>
                    </div>
                    
                    <div class="detailform-group">
                        <label for="slogan">School Slogan/Motto</label>
                        <input type="text" id="slogan" name="slogan" placeholder="Enter school slogan">
                    </div>
                    
                    <div class="detailform-group">
                        <label for="location">Location/Address</label>
                        <textarea id="location" name="location" rows="2" placeholder="Enter full school address"></textarea>
                    </div>
                </div>
                
                <!-- Contact Information -->
                <div class="detailform-section">
                    <h2>Contact Information</h2>
                    
                    <div class="detailform-row">
                        <div class="detailform-group">
                            <label for="email" class="detailrequired">Email Address</label>
                            <input type="email" id="email" name="email" required placeholder="school@example.com">
                        </div>
                        
                        <div class="detailform-group">
                            <label for="telephone">Telephone</label>
                            <input type="tel" id="telephone" name="telephone" placeholder="+1-234-567-8900">
                        </div>
                    </div>
                    
                    <div class="detailform-group">
                        <label for="mobile">Mobile Number</label>
                        <input type="tel" id="mobile" name="mobile" placeholder="+1-234-567-8900">
                    </div>
                </div>
                
                <!-- Social Media -->
                <div class="detailform-section">
                    <h2>Social Media</h2>
                    
                    <div class="detailform-group">
                        <label for="facebook">Facebook URL</label>
                        <div class="detailsocial-input">
                            <i class="fab fa-facebook-f"></i>
                            <input type="url" id="facebook" name="facebook" placeholder="https://facebook.com/schoolname">
                        </div>
                    </div>
                    
                    <div class="detailform-group">
                        <label for="twitter">Twitter URL</label>
                        <div class="detailsocial-input">
                            <i class="fab fa-twitter"></i>
                            <input type="url" id="twitter" name="twitter" placeholder="https://twitter.com/schoolname">
                        </div>
                    </div>
                    
                    <div class="detailform-group">
                        <label for="instagram">Instagram URL</label>
                        <div class="detailsocial-input">
                            <i class="fab fa-instagram"></i>
                            <input type="url" id="instagram" name="instagram" placeholder="https://instagram.com/schoolname">
                        </div>
                    </div>
                    
                    <div class="detailform-group">
                        <label for="youtube">YouTube URL</label>
                        <div class="detailsocial-input">
                            <i class="fab fa-youtube"></i>
                            <input type="url" id="youtube" name="youtube" placeholder="https://youtube.com/schoolname">
                        </div>
                    </div>
                </div>
                
                <!-- Media Uploads -->
                <div class="detailform-section">
                    <h2>Media Uploads</h2>
                    
                    <div class="detailform-row">
                        <div class="detailform-group">
                            <label for="logo">School Logo</label>
                            <input type="file" id="logo" name="logo" class="detailfile-input" accept="image/*">
                            <p class="detailform-note">Recommended size: 300x300 pixels</p>
                        </div>
                        
                        <div class="detailform-group">
                            <label for="favicon">Favicon</label>
                            <input type="file" id="favicon" name="favicon" class="detailfile-input" accept="image/*">
                            <p class="detailform-note">Recommended size: 32x32 pixels</p>
                        </div>
                    </div>
                </div>
                
                <button type="submit" class="detailbutton">Submit School Information</button>
            </form>
        </div>
    </div>

    <script>
        document.getElementById('schoolForm').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('School information submitted successfully!');
        });
        
        // Set established date max to today
        const establishedDate = document.getElementById('establishedDate');
        establishedDate.max = new Date().toISOString().split("T")[0];
    </script>
@endsection
