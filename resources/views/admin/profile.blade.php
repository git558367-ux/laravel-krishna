@extends('admin.layout.app')

@section('title', 'Profile')

@section('main')

<div class="app-content-area">
            <div class="app-content-wrap">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="page-title-box d-flex-between flex-wrap gap-15">
                                <h1 class="page-title fs-18 lh-1">Applicants Details</h1>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb breadcrumb-example1 mb-0">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Job</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Applicants Details</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-xl-12">
                            <div class="card">
                                <div class="card-header justify-between">
                                    <h4 class="">Personal Information</h4>
                                    <div class="card-dropdown">
                                        <div class="dropdown">
                                            <a class="card-dropdown-icon" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-2-fill"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);">This Month</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                                <a class="dropdown-item" href="javascript:void(0);">This Year</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-15">
                                    <div class="text-center mb-10">
                                        <div class="avatar avatar-big radius-100">
                                            <img class="radius-100" src="assets/images/avatar/avatar-thumb-001.webp" alt="image not found">
                                        </div>
                                    </div>
                                    <div class="profile-info text-center mb-15">
                                        <h3 class="mb-5">Ethan Mitchell</h3>
                                        <h6 class="text-body mb-10">Web Designer</h6>
                                        <div class="d-flex-center gap-15">
                                            <a href="javascript:void(0);" class="btn-icon btn-warning-light fs-16">
                                                <i class="ri-twitter-x-line"></i>
                                            </a><a href="javascript:void(0);" class="btn-icon btn-success-light fs-16">
                                                <i class="ri-facebook-fill"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="btn-icon btn-info-light fs-16">
                                                <i class="ri-linkedin-fill"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="btn-icon btn-danger-light fs-16">
                                                <i class="ri-whatsapp-line"></i>
                                            </a>
                                            <a href="javascript:void(0);" class="btn-icon btn-primary-light fs-16">
                                                <i class="ri-telegram-2-fill"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="table-responsive mb-15">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <td style="min-width: 105px;">Employee ID:</td>
                                                    <td>
                                                        <div class="text-heading">MD-0001</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Date of Join</td>
                                                    <td>
                                                        <div class="text-heading">2024-06-28</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Email</td>
                                                    <td>
                                                        <div class="text-heading"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="22484d4a4c0c514f4b564a62475a434f524e470c414d4f">[email&#160;protected]</a></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Phone</td>
                                                    <td>
                                                        <div class="text-heading">+1(800) 642 7676</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Birthday</td>
                                                    <td>
                                                        <div class="text-heading">1992-12-28</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Gender</td>
                                                    <td>
                                                        <div class="text-heading">Male</div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Address</td>
                                                    <td>
                                                        <div class="text-heading">100 Fort Lauderdale, Miami
                                                            33315, United States</div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="text-center">
                                        <button class="btn btn-primary" type="button">Send Message</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-6 col-lg-6">
                            <div class="card">
                                <div class="card-header justify-between">
                                    <h4 class="">Work Experience</h4>
                                    <div class="card-dropdown">
                                        <div class="dropdown">
                                            <a class="card-dropdown-icon" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-2-fill"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-15">
                                    <div class="exp-timeline-item mb-25">
                                        <div class="exp-timeline-badge btn-icon btn-sm btn-info-light fs-20">
                                            <i class="ri-briefcase-line"></i>
                                        </div>
                                        <div class="exp-timeline-content">
                                            <div class="exp-timeline-header d-flex-between gap-15 mb-5">
                                                <h5>Senior Product Designer</h5>
                                                <span class="exp-timeline-date fs-15 fw-6">2021 - Present</span>
                                            </div>
                                            <span class="company-name d-block fs-15 fw-6 mb-5">TechVision Inc.</span>
                                            <p class="job-description">
                                                Led SaaS product design, built design systems, and boosted user
                                                retention 32% through research-driven solutions.
                                            </p>
                                            <div class="job-skills d-flex-items flex-wrap gap-10">
                                                <span class="badge bg-label-primary">UI/UX
                                                    Design</span>
                                                <span class="badge bg-label-danger">Figma</span>
                                                <span class="badge bg-label-info">Prototyping</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="exp-timeline-item mb-25">
                                        <div class="exp-timeline-badge btn-icon btn-sm btn-info-light fs-20">
                                            <i class="ri-briefcase-line"></i>
                                        </div>
                                        <div class="exp-timeline-content">
                                            <div class="exp-timeline-header d-flex-between gap-15 mb-5">
                                                <h5>Product Designer</h5>
                                                <span class="exp-timeline-date fs-15 fw-6">2018 - 2021</span>
                                            </div>
                                            <span class="company-name d-block fs-15 fw-6 mb-5">Digital Solutions
                                                LLC</span>
                                            <p class="job-description">
                                                Designed fintech & healthcare apps, creating wireframes & prototypes
                                                while leading usability testing.
                                            </p>
                                            <div class="job-skills d-flex-items flex-wrap gap-10">
                                                <span class="badge bg-label-primary">Wireframing</span>
                                                <span class="badge bg-label-purple">Adobe XD</span>
                                                <span class="badge bg-label-success">User
                                                    Testing</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="exp-timeline-item">
                                        <div class="exp-timeline-badge btn-icon btn-sm btn-info-light fs-20">
                                            <i class="ri-briefcase-line"></i>
                                        </div>
                                        <div class="exp-timeline-content">
                                            <div class="exp-timeline-header d-flex-between gap-15 mb-5">
                                                <h5>Junior Designer</h5>
                                                <span class="exp-timeline-date fs-15 fw-6">2016 - 2018</span>
                                            </div>
                                            <span class="company-name d-block fs-15 fw-6 mb-5">Creative Studio</span>
                                            <p class="job-description">
                                                Assisted senior designers with projects, created marketing materials,
                                                and developed branding concepts for small businesses and startups.
                                            </p>
                                            <div class="job-skills d-flex-items flex-wrap gap-10">
                                                <span class="badge bg-label-pink">Graphic
                                                    Design</span>
                                                <span class="badge bg-label-warning">Illustrator</span>
                                                <span class="badge bg-label-teal">Branding</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-6 col-lg-6">
                            <div class="card">
                                <div class="card-header justify-between">
                                    <h4 class="">Education Qualifications</h4>
                                    <div class="card-dropdown">
                                        <div class="dropdown">
                                            <a class="card-dropdown-icon" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-2-fill"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);">This Month</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                                <a class="dropdown-item" href="javascript:void(0);">This Year</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-15">
                                    <div class="edu-timeline-item mb-25">
                                        <div class="edu-timeline-content">
                                            <div class="edu-timeline-header d-flex-between gap-15 mb-5">
                                                <h5>Master of Computer Science</h5>
                                                <span class="edu-timeline-date">2019 - 2021</span>
                                            </div>
                                            <span class="institution-name d-block fs-15 fw-6 mb-5">Stanford
                                                University</span>
                                            <p class="education-details mb-15">
                                                Specialization in Artificial Intelligence | GPA: 3.8/4.0<br>
                                                Thesis: "Neural Networks for Predictive Analysis in Healthcare"
                                            </p>
                                            <div class="education-achievements d-flex-items gap-10">
                                                <span class="badge bg-label-primary">Summa Cum
                                                    Laude</span>
                                                <span class="badge bg-label-success">Research
                                                    Fellow</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="edu-timeline-item mb-25">
                                        <div class="edu-timeline-content">
                                            <div class="edu-timeline-header d-flex-between gap-15 mb-5">
                                                <h5>Bachelor of Science in Software Engineering</h5>
                                                <span class="edu-timeline-date">2015 - 2019</span>
                                            </div>
                                            <span class="institution-name d-block fs-15 fw-6 mb-5">MIT</span>
                                            <p class="education-details mb-15">
                                                Minor in Data Science | GPA: 3.6/4.0<br>
                                                Senior Project: Developed campus parking optimization system
                                            </p>
                                            <div class="education-achievements d-flex-items gap-10">
                                                <span class="badge bg-label-info">Dean's List</span>
                                                <span class="badge bg-label-warning">Hackathon
                                                    Winner</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="edu-timeline-item">
                                        <div class="edu-timeline-content">
                                            <div class="edu-timeline-header d-flex-between gap-15 mb-5">
                                                <h5>High School Diploma</h5>
                                                <span class="edu-timeline-date">2011 - 2015</span>
                                            </div>
                                            <span class="institution-name d-block fs-15 fw-6 mb-5">Boston Latin
                                                School</span>
                                            <p class="education-details mb-15">
                                                Advanced STEM Program | GPA: 4.2/4.0 (weighted)<br>
                                                Captain of Robotics Team (FIRST Tech Challenge)
                                            </p>
                                            <div class="education-achievements d-flex-items gap-10">
                                                <span class="badge bg-label-slateblue">Valedictorian</span>
                                                <span class="badge bg-label-pink">National Merit
                                                    Scholar</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-8 col-xl-12">
                            <div class="card">
                                <div class="card-header justify-between">
                                    <h4 class="">Projects Status Overview</h4>
                                    <div class="card-dropdown">
                                        <div class="dropdown">
                                            <a class="card-dropdown-icon" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-2-fill"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);">This Week</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                                                <a class="dropdown-item" href="javascript:void(0);">This Month</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-15">
                                    <div class="table-responsive">
                                        <table class="table tbody-b-none text-nowrap" id="dataTableDefaultTwo2">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Projects</th>
                                                    <th>Team Leader</th>
                                                    <th>Team</th>
                                                    <th>Deadline</th>
                                                    <th>Priority</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>#PRJ-1025</td>
                                                    <td>
                                                        <h6 class="mb-0 text-body">E-commerce Platform</h6>
                                                        <small class="text-muted">Development</small>
                                                    </td>
                                                    <td class="d-flex-items gap-10">
                                                        <div class="avatar radius-100">
                                                            <img class="radius-100" src="assets/images/avatar/avatar-thumb-001.webp" alt="image not found">
                                                        </div>
                                                        <h6>
                                                            <a href="hrm-employee-details.html">John Smith</a>
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <div class="avatar-group">
                                                            <div class="avatar-group-item avatar avatar-sm">
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top">
                                                                    <img class="radius-100" src="assets/images/avatar/avatar-thumb-001.webp" alt="image not found">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item avatar avatar-sm">
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top">
                                                                    <img class="radius-100" src="assets/images/avatar/avatar-thumb-002.webp" alt="image not found">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item avatar avatar-sm">
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top">
                                                                    <img class="radius-100" src="assets/images/avatar/avatar-thumb-003.webp" alt="image not found">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item avatar avatar-sm">
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top">
                                                                    <img class="radius-100" src="assets/images/avatar/avatar-thumb-004.webp" alt="image not found">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>15 Jul 2023</td>
                                                    <td><span class="badge bg-label-danger">High</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex-items gap-10">
                                                            <a class="btn-icon btn-info-light" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View">
                                                                <i class="ri-eye-line"></i>
                                                            </a>
                                                            <a class="btn-icon btn-warning-light" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Edit">
                                                                <i class="ri-edit-line"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#PRJ-1026</td>
                                                    <td>
                                                        <h6 class="mb-0 text-body">Customer Mobile App</h6>
                                                        <small class="text-muted">Design</small>
                                                    </td>
                                                    <td class="d-flex-items gap-10">
                                                        <div class="avatar radius-100">
                                                            <img class="radius-100" src="assets/images/avatar/avatar-thumb-002.webp" alt="image not found">
                                                        </div>
                                                        <h6>
                                                            <a href="hrm-employee-details.html">Sarah Johnson</a>
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <div class="avatar-group">
                                                            <div class="avatar-group-item avatar avatar-sm">
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top">
                                                                    <img class="radius-100" src="assets/images/avatar/avatar-thumb-001.webp" alt="image not found">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item avatar avatar-sm">
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top">
                                                                    <img class="radius-100" src="assets/images/avatar/avatar-thumb-002.webp" alt="image not found">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item avatar avatar-sm">
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top">
                                                                    <img class="radius-100" src="assets/images/avatar/avatar-thumb-003.webp" alt="image not found">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item avatar avatar-sm">
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top">
                                                                    <img class="radius-100" src="assets/images/avatar/avatar-thumb-004.webp" alt="image not found">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>25 Jul 2023</td>
                                                    <td><span class="badge bg-label-warning">Medium</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex-items gap-10">
                                                            <a class="btn-icon btn-info-light" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View">
                                                                <i class="ri-eye-line"></i>
                                                            </a>
                                                            <a class="btn-icon btn-success-light" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Approve">
                                                                <i class="ri-check-line"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#PRJ-1027</td>
                                                    <td>
                                                        <h6 class="mb-0 text-body">Admin Dashboard</h6>
                                                        <small class="text-muted">Testing</small>
                                                    </td>
                                                    <td class="d-flex-items gap-10">
                                                        <div class="avatar radius-100">
                                                            <img class="radius-100" src="assets/images/avatar/avatar-thumb-003.webp" alt="image not found">
                                                        </div>
                                                        <h6>
                                                            <a href="hrm-employee-details.html">Michael Brown</a>
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <div class="avatar-group">
                                                            <div class="avatar-group-item avatar avatar-sm">
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top">
                                                                    <img class="radius-100" src="assets/images/avatar/avatar-thumb-001.webp" alt="image not found">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item avatar avatar-sm">
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top">
                                                                    <img class="radius-100" src="assets/images/avatar/avatar-thumb-002.webp" alt="image not found">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item avatar avatar-sm">
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top">
                                                                    <img class="radius-100" src="assets/images/avatar/avatar-thumb-003.webp" alt="image not found">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item avatar avatar-sm">
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top">
                                                                    <img class="radius-100" src="assets/images/avatar/avatar-thumb-004.webp" alt="image not found">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>05 Aug 2023</td>
                                                    <td><span class="badge bg-label-success">Low</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex-items gap-10">
                                                            <a class="btn-icon btn-info-light" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View">
                                                                <i class="ri-eye-line"></i>
                                                            </a>
                                                            <a class="btn-icon btn-danger-light" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Delay">
                                                                <i class="ri-time-line"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#PRJ-1029</td>
                                                    <td>
                                                        <h6 class="mb-0 text-body">E-commerce Platform</h6>
                                                        <small class="text-muted">Development</small>
                                                    </td>
                                                    <td class="d-flex-items gap-10">
                                                        <div class="avatar radius-100">
                                                            <img class="radius-100" src="assets/images/avatar/avatar-thumb-005.webp" alt="image not found">
                                                        </div>
                                                        <h6>
                                                            <a href="hrm-employee-details.html">Michael Johnson</a>
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <div class="avatar-group">
                                                            <div class="avatar-group-item avatar avatar-sm">
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top">
                                                                    <img class="radius-100" src="assets/images/avatar/avatar-thumb-005.webp" alt="image not found">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item avatar avatar-sm">
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top">
                                                                    <img class="radius-100" src="assets/images/avatar/avatar-thumb-006.webp" alt="image not found">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>15 Aug 2023</td>
                                                    <td><span class="badge bg-label-warning">Medium</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex-items gap-10">
                                                            <a class="btn-icon btn-info-light" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View">
                                                                <i class="ri-eye-line"></i>
                                                            </a>
                                                            <a class="btn-icon btn-primary-light" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Launch">
                                                                <i class="ri-rocket-line"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#PRJ-1030</td>
                                                    <td>
                                                        <h6 class="mb-0 text-body">Mobile App Redesign</h6>
                                                        <small class="text-muted">UI/UX</small>
                                                    </td>
                                                    <td class="d-flex-items gap-10">
                                                        <div class="avatar radius-100">
                                                            <img class="radius-100" src="assets/images/avatar/avatar-thumb-007.webp" alt="image not found">
                                                        </div>
                                                        <h6>
                                                            <a href="hrm-employee-details.html">Sarah Wilson</a>
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <div class="avatar-group">
                                                            <div class="avatar-group-item avatar avatar-sm">
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top">
                                                                    <img class="radius-100" src="assets/images/avatar/avatar-thumb-007.webp" alt="image not found">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item avatar avatar-sm">
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top">
                                                                    <img class="radius-100" src="assets/images/avatar/avatar-thumb-008.webp" alt="image not found">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item avatar avatar-sm">
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top">
                                                                    <img class="radius-100" src="assets/images/avatar/avatar-thumb-009.webp" alt="image not found">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>22 Sep 2023</td>
                                                    <td><span class="badge bg-label-success">Low</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex-items gap-10">
                                                            <a class="btn-icon btn-info-light" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View">
                                                                <i class="ri-eye-line"></i>
                                                            </a>
                                                            <a class="btn-icon btn-primary-light" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Launch">
                                                                <i class="ri-rocket-line"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>#PRJ-1031</td>
                                                    <td>
                                                        <h6 class="mb-0 text-body">CRM System Upgrade</h6>
                                                        <small class="text-muted">Backend</small>
                                                    </td>
                                                    <td class="d-flex-items gap-10">
                                                        <div class="avatar radius-100">
                                                            <img class="radius-100" src="assets/images/avatar/avatar-thumb-010.webp" alt="image not found">
                                                        </div>
                                                        <h6>
                                                            <a href="hrm-employee-details.html">David Thompson</a>
                                                        </h6>
                                                    </td>
                                                    <td>
                                                        <div class="avatar-group">
                                                            <div class="avatar-group-item avatar avatar-sm">
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top">
                                                                    <img class="radius-100" src="assets/images/avatar/avatar-thumb-010.webp" alt="image not found">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item avatar avatar-sm">
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top">
                                                                    <img class="radius-100" src="assets/images/avatar/avatar-thumb-011.webp" alt="image not found">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item avatar avatar-sm">
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top">
                                                                    <img class="radius-100" src="assets/images/avatar/avatar-thumb-012.webp" alt="image not found">
                                                                </a>
                                                            </div>
                                                            <div class="avatar-group-item avatar avatar-sm">
                                                                <a href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Tooltip on top">
                                                                    <img class="radius-100" src="assets/images/avatar/avatar-thumb-001.webp" alt="image not found">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>05 Oct 2023</td>
                                                    <td><span class="badge bg-label-danger">High</span>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex-items gap-10">
                                                            <a class="btn-icon btn-info-light" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="View">
                                                                <i class="ri-eye-line"></i>
                                                            </a>
                                                            <a class="btn-icon btn-primary-light" href="javascript:void(0);" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Launch">
                                                                <i class="ri-rocket-line"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-12">
                            <div class="card">
                                <div class="card-header justify-between">
                                    <h4 class="">Skills & Certifications</h4>
                                    <div class="card-dropdown">
                                        <div class="dropdown">
                                            <a class="card-dropdown-icon" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-2-fill"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);">This Month</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                                <a class="dropdown-item" href="javascript:void(0);">This Year</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-15">
                                    <div class="skills-list">
                                        <div class="skill-item mb-10">
                                            <div class="skill-info d-flex-between gap-10 mb-10">
                                                <span class="skill-name text-heading fw-6">Figma</span>
                                                <span class="update-date fs-12">Last updated: 15 May 2025</span>
                                            </div>
                                            <div class="skill-progress">
                                                <div class="progress">
                                                    <div class="progress-bar bg-danger" role="progressbar" style="width: 95%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="progress-percent">95%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="skill-item mb-10">
                                            <div class="skill-info d-flex-between gap-10 mb-10">
                                                <span class="skill-name text-heading fw-6">HTML</span>
                                                <span class="update-date fs-12">Last updated: 12 May 2025</span>
                                            </div>
                                            <div class="skill-progress">
                                                <div class="progress">
                                                    <div class="progress-bar bg-warning" role="progressbar" style="width: 95%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="progress-percent">95%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="skill-item mb-10">
                                            <div class="skill-info d-flex-between gap-10 mb-10">
                                                <span class="skill-name text-heading fw-6">CSS</span>
                                                <span class="update-date fs-12">Last updated: 12 May 2025</span>
                                            </div>
                                            <div class="skill-progress">
                                                <div class="progress">
                                                    <div class="progress-bar bg-info" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="progress-percent">70%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="skill-item mb-10">
                                            <div class="skill-info d-flex-between gap-10 mb-10">
                                                <span class="skill-name text-heading fw-6">WordPress</span>
                                                <span class="update-date fs-12">Last updated: 15 May 2025</span>
                                            </div>
                                            <div class="skill-progress">
                                                <div class="progress">
                                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 61%" aria-valuenow="61" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="progress-percent">61%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="skill-item mb-10">
                                            <div class="skill-info d-flex-between gap-10 mb-10">
                                                <span class="skill-name text-heading fw-6">JavaScript</span>
                                                <span class="update-date fs-12">Last updated: 13 May 2025</span>
                                            </div>
                                            <div class="skill-progress">
                                                <div class="progress">
                                                    <div class="progress-bar bg-orange" role="progressbar" style="width: 58%" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="progress-percent text-white">58%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="skill-item mb-10">
                                            <div class="skill-info d-flex-between gap-10 mb-10">
                                                <span class="skill-name text-heading fw-6">React</span>
                                                <span class="update-date fs-12">Last updated: 10 May 2025</span>
                                            </div>
                                            <div class="skill-progress">
                                                <div class="progress">
                                                    <div class="progress-bar bg-success" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="progress-percent">85%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="skill-item">
                                            <div class="skill-info d-flex-between gap-10 mb-10">
                                                <span class="skill-name text-heading fw-6">UI/UX Design</span>
                                                <span class="update-date fs-12">Last updated: 14 May 2025</span>
                                            </div>
                                            <div class="skill-progress">
                                                <div class="progress">
                                                    <div class="progress-bar bg-purple" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100">
                                                        <span class="progress-percent">78%</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxl-4 col-xl-6 col-lg-6">
                            <div class="card">
                                <div class="card-header justify-between">
                                    <h4 class="">Bank Details</h4>
                                    <div class="card-dropdown">
                                        <div class="dropdown">
                                            <a class="card-dropdown-icon" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-2-fill"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);">This Month</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                                <a class="dropdown-item" href="javascript:void(0);">This Year</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-15">
                                    <ul class="bank-info enhanced-list">
                                        <li class="d-flex-between py-9 b-bottom">
                                            <div class="info-label">
                                                <i class="ri-user-line"></i>
                                                <span class="text-body">Account Holder Name:</span>
                                            </div>
                                            <div class="info-value">Ethan Mitchell</div>
                                        </li>

                                        <li class="d-flex-between py-9 b-bottom">
                                            <div class="info-label">
                                                <i class="ri-bank-card-line"></i>
                                                <span class="text-body">Account Number:</span>
                                            </div>
                                            <div class="info-value">
                                                <span id="accountNumber" class="account-number" data-full="1234 5678 9012">•••• •••• 9012</span>
                                                <button id="toggleAccount" class="btn-eye ms-2" type="button">
                                                    <i id="eyeIcon" class="ri-eye-line"></i>
                                                </button>
                                            </div>
                                        </li>

                                        <li class="d-flex-between py-9 b-bottom">
                                            <div class="info-label">
                                                <i class="ri-building-line"></i>
                                                <span class="text-body">Bank Name:</span>
                                            </div>
                                            <div class="info-value">ABC Bank</div>
                                        </li>

                                        <li class="d-flex-between py-9 b-bottom">
                                            <div class="info-label">
                                                <i class="ri-map-pin-line"></i>
                                                <span class="text-body">Branch Location:</span>
                                            </div>
                                            <div class="info-value">
                                                <span>XYZ Branch</span>
                                                <small class="text-muted d-block">123 Main St, Cityville</small>
                                            </div>
                                        </li>

                                        <li class="d-flex-between py-9 b-bottom">
                                            <div class="info-label">
                                                <i class="ri-global-line"></i>
                                                <span class="text-body">SWIFT/BIC Code:</span>
                                            </div>
                                            <div class="info-value">ABCXYZ123</div>
                                        </li>

                                        <li class="d-flex-between py-9 b-bottom">
                                            <div class="info-label">
                                                <i class="ri-exchange-line"></i>
                                                <span class="text-body">Routing Number:</span>
                                            </div>
                                            <div class="info-value">ABC12345</div>
                                        </li>
                                    </ul>
                                    <div class="d-flex-center mt-15">
                                        <button class="btn btn-primary-light btn-sm text-primary" id="copyBankDetails">
                                            <i class="ri-file-copy-line me-1"></i> Copy Details
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-6 col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="paypal-card">
                                        <div class="paypal-header">
                                            <img src="../../webstatic/mktg/logo/pp_cc_mark_111x69.jpg" alt="PayPal" class="paypal-logo">
                                            <span class="paypal-badge">Connected</span>
                                        </div>

                                        <ul class="paypal-details mb-10">
                                            <li class="paypal-item">
                                                <span class="paypal-label">Account Name:</span>
                                                <span class="paypal-value">Ethan Mitchell</span>
                                            </li>
                                            <li class="paypal-item">
                                                <span class="paypal-label">Email:</span>
                                                <span class="paypal-value"><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="20455448414e0e4d49544348454c4c604558414d504c450e434f4d">[email&#160;protected]</a></span>
                                            </li>
                                            <li class="paypal-item">
                                                <span class="paypal-label">Account Type:</span>
                                                <span class="paypal-value">Business</span>
                                            </li>
                                            <li class="paypal-item">
                                                <span class="paypal-label">Currency:</span>
                                                <span class="paypal-value">USD</span>
                                            </li>
                                            <li class="paypal-item">
                                                <span class="paypal-label">Connected Since:</span>
                                                <span class="paypal-value">Jan 2022</span>
                                            </li>
                                        </ul>

                                        <div class="paypal-actions d-flex-center gap-10 mb-15">
                                            <button class="btn btn-sm btn-primary">
                                                <i class="ri-send-plane-line"></i> Send Payment
                                            </button>
                                            <button class="btn btn-sm btn-secondary">
                                                <i class="ri-settings-3-line"></i> Manage
                                            </button>
                                        </div>

                                        <div class="paypal-footer">
                                            <i class="ri-lock-fill"></i> Secured by PayPal
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-6 col-lg-6">
                            <div class="card">
                                <div class="card-header justify-between">
                                    <h4 class="">Login & Access Information</h4>
                                    <div class="card-dropdown">
                                        <div class="dropdown">
                                            <a class="card-dropdown-icon" href="javascript:void(0);" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="ri-more-2-fill"></i>
                                            </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="javascript:void(0);">This Month</a>
                                                <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                                <a class="dropdown-item" href="javascript:void(0);">This Year</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-15">
                                    <div class="login-access">
                                        <div class="info-group">
                                            <label>Registered Email</label>
                                            <div class="info-value">
                                                <span><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="7217061a131c5c1f1b06111a171e1e32170a131f021e175c111d1f">[email&#160;protected]</a></span>
                                                <button class="icon-btn" title="Copy Email">
                                                    <i class="ri-file-copy-line"></i>
                                                </button>
                                            </div>
                                        </div>
                                        <div class="info-group">
                                            <label>Password</label>
                                            <div class="info-value">
                                                <span class="password-display">••••••••</span>
                                                <div class="action-group d-flex gap-10">
                                                    <button class="icon-btn toggle-password" title="Show Password">
                                                        <i class="ri-eye-line"></i>
                                                    </button>
                                                    <button class="icon-btn" title="Change Password">
                                                        <i class="ri-edit-line"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="info-group">
                                            <label>Two-Factor Authentication</label>
                                            <div class="info-value">
                                                <span class="badge primary-bd-transparent text-primary">Active</span>
                                                <button class="text-info">Manage 2FA</button>
                                            </div>
                                        </div>
                                        <div class="info-group">
                                            <label>Last Login</label>
                                            <div class="info-value">
                                                <span>Yesterday, 2:45 PM</span>
                                                <span class="ip-address">(IP: 192.168.1.105)</span>
                                            </div>
                                        </div>
                                        <div class="access-footer">
                                            <div class="security-meter">
                                                <span>Security Strength:</span>
                                                <div class="meter-bar">
                                                    <div class="meter-fill high"></div>
                                                </div>
                                                <span>Strong</span>
                                            </div>
                                            <div class="d-flex-center">
                                                <button class="btn btn-danger-light btn-sm text-danger">
                                                    <i class="ri-logout-box-r-line"></i> Sign Out All Devices
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection