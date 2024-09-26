# UMKM Management System

A web-based application built using **CodeIgniter 4** that allows users to manage small and medium enterprises (UMKM) data. This system includes basic CRUD (Create, Read, Update, Delete) functionality for managing different data entities such as business types, UMKM records, criteria, and weight data.

## Features

1. **Jenis Usaha (Business Types) Management**
   - Add, edit, and delete business types (e.g., Apotek, Bengkel, Toko Meubel).
   
2. **UMKM Management**
   - Manage UMKM data, including the name of the business, leader, address, and business type.
   
3. **Criteria & Weight Management**
   - Define and modify various criteria such as business type, number of employees, and business capital.
   - Set and manage criteria weight and value to be used in ranking or decision-making processes.
   
4. **CRUD Operations**
   - The application supports full CRUD operations (Create, Read, Update, Delete) for each of the data entities.
   
5. **Auto-Routing**
   - Utilizes **CodeIgniter's auto-routing** to handle URL requests without manually defining all routes.

## Project Structure

- **Model**: 
  - Contains all the logic for interacting with the database, with models for each of the tables (e.g., `JenisUsahaModel`, `UmkmModel`, `BobotModel`, `KriteriaModel`).
  
- **Controller**: 
  - Handles requests for different actions like listing, adding, updating, and deleting records in the database (e.g., `JenisUsahaController`, `UmkmController`, etc.).

- **Views**:
  - Contains HTML templates to display the form and table data, allowing users to interact with the system visually. 

## Database Structure

The system includes the following tables:

1. **jenis_usaha**: Stores the type of businesses (e.g., Apotek, Bengkel, Toko Meubel).
2. **umkm**: Stores data related to UMKM, including the business name, leader, address, and business type.
3. **bobot**: Stores criteria weights used in decision-making.
4. **kriteria**: Stores specific criteria related to UMKM, including categories such as number of employees and capital.
