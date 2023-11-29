# Project Documentation for SmartProcess ATS Platform

## Introduction

### Project Context

SmartProcess aims to develop a professional tool in the form of an Applicant Tracking System (ATS) platform. This solution is intended to manage and track applications for SmartProcess's client companies. Currently, SmartProcess relies on TalentView, a costly third-party platform, and HelloWork. The new tool will replace TalentView while coexisting with HelloWork.

### Project Objectives

- Develop a reliable and scalable web platform for efficient tracking of applications and recruitment processes.
- Establish a solid data structure to support key ATS functionalities.
- Integrate with third-party services like Trimoji to enhance existing features and add new functionalities or existing recruitment platforms like google jobs or 
- Ensure high-quality user experience while adhering to data security and privacy standards.

### Target Audience and End Users

The target audience includes SmartProcess's client companies needing an efficient system for their recruitment processes. End users will primarily be recruitment managers in these companies, candidates applying through the system, and SmartProcess employees who will have administrative access to the platform.

## System Overview

### Job Management

Recruitment managers and SmartProcess administrators can create, publish, update, or delete job offers on the platform.

### Application Management

Candidates can apply for jobs, and recruiters/administrators can view, evaluate, and track these applications through the recruitment process.

There is 3 levels of recruiters : Group managers, Brand managers and Business manager. Group can create Brand and Business accounts and see their data. Brand can create Business accounts and view their data. 

### Candidate Profile Creation and Management

Candidates can create and manage their profiles, containing information like CVs, and introductory videos. They can also track their application status.

### Communication Tools

The platform will offer communication tools, including video introduction recording and video conferencing for interviews.

The platform will also intergrate api call to openAi chatgpt to assist ads writing or other tasks like CV analysis. 

### Trimoji Integration

Integration with Trimoji for personality tests, with results added to candidate profiles.

### Subscription Level Management

Client companies can choose from different subscription levels, determining the level of assistance provided by SmartProcess administrators during recruitment.

### Job Posting Tool

Clients can disseminate job offers on third-party sites using a JavaScript code provided by the platform or create specific posts for various social networks.

They can also share job offers on third party sites like google jobs or indeed and mentionned in the mockup.

### Development Technologies

The functionalities will be developed using Laravel and FilamentPHP for the backend, and Livewire for the frontend. The platform will be hosted on a web server and accessible via a web browser.

## Data Structure

### Key Tables

- **Users**: Stores general information about all platform users (candidates, recruiters, SmartProcess administrators).
- **Applicants**: Contains specific information about candidates, linked to Users.
- **Jobs**: Details about job offers, linked to Companies.
- **Companies**: Information about client companies, linked to a group for organization.
- **Applications**: Stores applications, linking candidates, jobs, and CVs.
- **CVs**: Stores CVs uploaded by candidates.
- **hr_managers**: Information about HR users, including contact details and company links.
- **Test_Responses and Personality_Tests**: Stores personality test information and candidate responses.
- **Company_Docs**: Documents related to client companies.
- **Evaluations**: Manages candidate evaluation processes.
- **Introductions and Job_Documents**: Manages candidate introductions and job-related documents.
- **Meetings**: Manages meetings between HR and candidates, including time, place, and related job information.

These tables are interconnected with foreign key relations for a robust and flexible data structure.

## Technical Architecture

### Stack

- **Backend**: Laravel with MariaDB for database management. Asynchronous tasks might integrate Redis in the future.
- **Frontend**: Tailwind CSS and Livewire within Laravel.
- **Hosting and Deployment**: Docker microservices infrastructure, including a Traefik reverse proxy container, PHP/Apache/Node/Laravel container, MariaDB service container, and optional cache service. Continuous deployment via GitLab.
- **File Storage and Email Management**: Handled internally with local and remote backups for data security. Email managed via an internal Postal-type service.

## Key Features

### Job Management

Companies can create and publish job offers with details like position, work description, required qualifications, and visibility control.

### Candidate Applications

Candidates can apply directly to offers, track application status, receive new offer proposals, and indicate future contact preferences.

### Personality Tests

Optional personality tests for candidates, with results accessible to client companies.



==============================================================================================================



### Milestone 1: Platform Setup and Job Creation Feature

#### Objective

Set up the basic framework of the SmartProcess platform, enabling client companies to create and manage job offers.

#### Tasks

1. **Platform Infrastructure Development**
   - Set up your initial dev environment, ensuring it meets the requirements for the Laravel and Livewire stack.
   - Install and configure necessary backend technologies (Laravel, MariaDB) and frontend technologies (Tailwind CSS, Alpine.js).
   - Check existing user authentication, set up database connections, migrations, and basic navigation menu structure.
2. **Job Offer Creation Module Implementation**
   - Adjust if necessary: Design and develop the user interface for job offer creation, focusing on ease of use and accessibility.
   - Implement form functionalities, allowing for input of job details such as title, description, location, and qualifications required.
   - Use and adapt if necessary existing database schema for job listings, ensuring fields are well-structured for storing job information.
   - Develop backend logic to handle the creation, validation, and storage of job offer data.
   - Integrate the job creation feature with the main user dashboard for seamless access by client companies.
3. **Testing and Quality Assurance**
   - Test the user interface for user-friendliness and responsiveness across various devices and browsers.
   - Refine the module based on feedback and retest as necessary.

#### Deliverable

- A functional job creation feature on the SmartProcess platform, allowing client companies to easily create and publish job offers.
- Comprehensive documentation of source code using phpDocumentor.

#### Success Criteria

- The job creation feature is fully operational and mostly follows mockups logic.
- The feature meets the usability standards, with positive feedback from beta testing.

#### Timeline

- **Initial Setup and Development**: 1 week

*Note: The timeline is indicative and subject to change based on development progress and feedback.*





