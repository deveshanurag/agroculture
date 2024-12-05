

## **Agroculture - Empowering Farmers and Buyers 🌱**
**Agroculture** is a web application designed to bridge the gap between farmers and buyers, enabling seamless interactions while empowering the agricultural community. This platform allows farmers to advertise their crops, lodge complaints to the admin, access farming tips, and interact with buyers. Similarly, buyers can post crop requirements and engage with farmer listings. Admins oversee the platform by resolving complaints and sharing farming tips.

---

## **Features**

### **Farmer Features**
1. **Authentication**:  
   - Login, logout, and register.  
   - Edit profile and upload profile pictures.  
2. **Complaints Management**:  
   - Lodge complaints to the admin.  
   - View complaint statuses and delete complaints.  
3. **Farming Tips**:  
   - Access admin-posted farming tips for guidance.  
4. **Buyer Interaction**:  
   - View buyer ads for crop purchases.  
   - See buyer details for interested listings.  
5. **Crop Advertisement**:  
   - Advertise crops directly from the dashboard.  

### **Buyer Features**
1. **Authentication**:  
   - Login, logout, and register.  
   - Edit profile and upload profile pictures.  
2. **Crop Ads**:  
   - View farmer crop advertisements.  
   - Post ads for crop purchase requirements.  

### **Admin Features**
1. **Authentication**:  
   - Login, logout, and register.  
   - Edit profile.  
2. **Complaint Management**:  
   - View and resolve farmer complaints by marking them as read.  
3. **Farming Tips**:  
   - Post farming tips for farmers to access.  

---

## **Technology Stack**
1. **Frontend**:  
   - **HTML**, **CSS**, **JavaScript**: For building an intuitive and responsive user interface.  

2. **Backend**:  
   - **PHP**: For server-side scripting, form handling, and session management.  

3. **Database**:  
   - **MySQL**: To store and manage user data, complaints, farming tips, and advertisements.  

4. **Local Hosting**:  
   - **XAMPP**: To run Apache server and MySQL locally during development.

---

## **Installation and Setup**
### **Prerequisites**
- XAMPP (or any local server with PHP and MySQL support).
- Browser (Chrome, Firefox, etc.).

### **Steps to Run**
1. **Clone the Repository**  
   ```bash
   git clone https://github.com/deveshanurag/agroculture.git
   ```

2. **Move the Project to the XAMPP Directory**  
   Place the project folder inside `htdocs` (XAMPP directory).

3. **Import Database**  
   - Open `phpMyAdmin` in your browser (usually at `http://localhost/phpmyadmin`).  
   - Create a new database named `agroculture`.  
   - Import the `agroculture.sql` file included in the project.  

4. **Start XAMPP Services**  
   - Start Apache and MySQL from the XAMPP control panel.

5. **Run the Application**  
   - Open your browser and go to `http://localhost/agroculture`.

---

## Demo
Demo video:(open in incognito window)

https://drive.google.com/file/d/11Ch8HeRp_U8cxSGoouEdO8bZFIiwsk6D/view?usp=sharing

Live Website:

http://agroculture.lovestoblog.com/index.php

## **Usage**
- **Farmers**: Register/login and access features like complaints, ads, and tips via the farmer dashboard.  
- **Buyers**: Register/login and post/view ads through the buyer dashboard.  
- **Admins**: Login to post farming tips and resolve complaints.

---

## **Non-Technical Challenges**
1. **Requirement Gathering**: Ensuring the platform addressed the distinct needs of farmers, buyers, and admins.  
2. **User Interface**: Designing an intuitive UI for a diverse audience, including less tech-savvy users.  
3. **Testing**: Validating features like image uploads, complaint management, and role-based access control.

---

## **Future Scope**
- **Mobile App**: Extend functionality to mobile platforms.  
- **Real-time Notifications**: Notify users about new ads, farming tips, and complaint updates.  
- **Payment Integration**: Enable farmers and buyers to transact directly through the platform.  
- **Advanced Analytics**: Provide admins with insights into platform usage, ad engagement, and user activities.

---

## **License**
This project is licensed under the [MIT License](LICENSE).  

---

With *Agroculture*, we're committed to fostering stronger relationships between farmers and buyers while empowering both through technology.
