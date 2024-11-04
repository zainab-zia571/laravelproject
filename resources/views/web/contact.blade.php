 
 @extends('layouts.web') 
 @section('content')

 <link rel="stylesheet" href="{{url('CSS/contact.css')}}">
 <!-- Contact Us Section -->

 <div class="full_page">
 <section id="contact" class="contact-container">
            <h2>Contact Us</h2>
            <form action="#" method="get">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="mb-3">
                    <label for="subject" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="subject" name="subject" required>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn" style="margin:-2px 350px ;">Send Message</button>
            </form>
        </section>

 </div>
 