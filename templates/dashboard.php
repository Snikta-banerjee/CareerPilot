<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: ../templates/auth.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - AI Interview Coach</title>
    <link rel="stylesheet" href="../css/dashboard.css">
</head>
<body>
    <div class="gradient-bg"></div>
    
    <!-- Floating particles -->
    <div class="particle" style="width: 6px; height: 6px; top: 20%; left: 10%; animation-delay: 0s;"></div>
    <div class="particle" style="width: 4px; height: 4px; top: 60%; left: 80%; animation-delay: 2s;"></div>
    <div class="particle" style="width: 8px; height: 8px; top: 40%; left: 60%; animation-delay: 4s;"></div>

    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="sidebar-header">
            <h2 class="logo">CareerPilot</h2>
        </div>
        
        <nav class="sidebar-nav">
            <a href="#" class="nav-item active">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                    <polyline points="9 22 9 12 15 12 15 22"/>
                </svg>
                <span>Dashboard</span>
            </a>
            <a href="#" class="nav-item">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                    <polyline points="14 2 14 8 20 8"/>
                    <line x1="16" y1="13" x2="8" y2="13"/>
                    <line x1="16" y1="17" x2="8" y2="17"/>
                    <polyline points="10 9 9 9 8 9"/>
                </svg>
                <span>Practice Sessions</span>
            </a>
            <a href="#" class="nav-item">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="10"/>
                    <polyline points="12 6 12 12 16 14"/>
                </svg>
                <span>Schedule</span>
            </a>
            <a href="#" class="nav-item">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
                </svg>
                <span>Feedback</span>
            </a>
            <a href="#" class="nav-item">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <line x1="18" y1="20" x2="18" y2="10"/>
                    <line x1="12" y1="20" x2="12" y2="4"/>
                    <line x1="6" y1="20" x2="6" y2="14"/>
                </svg>
                <span>Analytics</span>
            </a>
            <a href="#" class="nav-item">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M9 11H3v10h6V11zm4-7h-2v17h2V4zm4 3h6v14h-6V7z"/>
                </svg>
                <span>Resources</span>
            </a>
            <a href="logout.php" class="nav-item">Logout</a>
        </nav>

        <div class="sidebar-footer">
            <div class="upgrade-card">
                <h4>Upgrade to Pro</h4>
                <p>Unlock advanced features and unlimited sessions</p>
                <button class="upgrade-btn">Upgrade Now</button>
            </div>
            <a href="#" class="nav-item">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="3"/>
                    <path d="M12 1v6m0 6v6m4.22-10.22l4.24-4.24m-4.24 12.68l4.24 4.24M20 12h-6m-6 0H2m10.22 4.22l-4.24 4.24m4.24-12.68L7.98 3.54"/>
                </svg>
                <span>Settings</span>
            </a>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="main-content">
        <!-- Header -->
        <header class="dashboard-header">
            <div class="header-left">
                <h1>Welcome back, <?= htmlspecialchars($_SESSION['user']['first_name']) ?>! 👋</h1>
                <p>Ready to ace your next interview? Let's practice!</p>
            </div>
            <div class="header-right">
                <button class="icon-btn">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/>
                        <path d="M13.73 21a2 2 0 0 1-3.46 0"/>
                    </svg>
                    <span class="notification-badge">3</span>
                </button>
                <div class="user-menu">
                    <img src="https://via.placeholder.com/40" alt="User" class="user-avatar">
                    <div class="user-info">
                        <span class="user-name">Sarah Chen</span>
                        <span class="user-role">Free Plan</span>
                    </div>
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="6 9 12 15 18 9"/>
                    </svg>
                </div>
            </div>
        </header>

        <!-- Stats Grid -->
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon" style="background: linear-gradient(135deg, #6366F1, #8B5CF6);">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                    </svg>
                </div>
                <div class="stat-content">
                    <h3>Interview Score</h3>
                    <div class="stat-value">85%</div>
                    <div class="stat-change positive">+12% from last week</div>
                </div>
                <div class="stat-chart">
                    <svg viewBox="0 0 100 40" class="mini-chart">
                        <polyline
                            fill="none"
                            stroke="#6366F1"
                            stroke-width="2"
                            points="0,35 20,30 40,25 60,20 80,15 100,10"
                        />
                    </svg>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon" style="background: linear-gradient(135deg, #EC4899, #F472B6);">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                        <line x1="16" y1="2" x2="16" y2="6"/>
                        <line x1="8" y1="2" x2="8" y2="6"/>
                        <line x1="3" y1="10" x2="21" y2="10"/>
                    </svg>
                </div>
                <div class="stat-content">
                    <h3>Sessions Completed</h3>
                    <div class="stat-value">24</div>
                    <div class="stat-change positive">+3 this week</div>
                </div>
                <div class="stat-chart">
                    <svg viewBox="0 0 100 40" class="mini-chart">
                        <rect x="5" y="25" width="10" height="15" fill="#EC4899" opacity="0.3"/>
                        <rect x="20" y="20" width="10" height="20" fill="#EC4899" opacity="0.3"/>
                        <rect x="35" y="15" width="10" height="25" fill="#EC4899" opacity="0.5"/>
                        <rect x="50" y="10" width="10" height="30" fill="#EC4899" opacity="0.7"/>
                        <rect x="65" y="5" width="10" height="35" fill="#EC4899" opacity="0.9"/>
                        <rect x="80" y="8" width="10" height="32" fill="#EC4899"/>
                    </svg>
                </div>
            </div>

            <div class="stat-card">
                <div class="stat-icon" style="background: linear-gradient(135deg, #F59E0B, #FCD34D);">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="12" cy="12" r="10"/>
                        <polyline points="8 12 12 16 16 12"/>
                        <line x1="12" y1="8" x2="12" y2="16"/>
                    </svg>
                </div>
                <div class="stat-content">
                    <h3>Next Session</h3>
                    <div class="stat-value">2h 15m</div>
                    <div class="stat-change">Google Interview Prep</div>
                </div>
            </div>
        </div>

        <!-- Main Dashboard Content -->
        <div class="dashboard-grid">
            <!-- Progress Chart -->
            <div class="card chart-card">
                <div class="card-header">
                    <h2>Your Progress</h2>
                    <select class="time-filter">
                        <option>Last 7 days</option>
                        <option>Last 30 days</option>
                        <option>Last 3 months</option>
                    </select>
                </div>
                <div class="chart-container">
                    <canvas id="progressChart"></canvas>
                </div>
                <div class="chart-legend">
                    <div class="legend-item">
                        <span class="legend-dot" style="background: #6366F1;"></span>
                        <span>Interview Score</span>
                    </div>
                    <div class="legend-item">
                        <span class="legend-dot" style="background: #EC4899;"></span>
                        <span>Confidence Level</span>
                    </div>
                    <div class="legend-item">
                        <span class="legend-dot" style="background: #10B981;"></span>
                        <span>Technical Skills</span>
                    </div>
                </div>
            </div>

            <!-- Upcoming Sessions -->
            <div class="card sessions-card">
                <div class="card-header">
                    <h2>Upcoming Sessions</h2>
                    <a href="#" class="view-all">View all →</a>
                </div>
                <div class="sessions-list">
                    <div class="session-item">
                        <div class="session-time">
                            <span class="time">2:30 PM</span>
                            <span class="date">Today</span>
                        </div>
                        <div class="session-info">
                            <h4>Google - Software Engineer</h4>
                            <p>Behavioral Interview Practice</p>
                        </div>
                        <button class="session-btn">Join</button>
                    </div>
                    <div class="session-item">
                        <div class="session-time">
                            <span class="time">10:00 AM</span>
                            <span class="date">Tomorrow</span>
                        </div>
                        <div class="session-info">
                            <h4>System Design Review</h4>
                            <p>Advanced Architecture Patterns</p>
                        </div>
                        <button class="session-btn outline">Schedule</button>
                    </div>
                    <div class="session-item">
                        <div class="session-time">
                            <span class="time">3:00 PM</span>
                            <span class="date">Mar 28</span>
                        </div>
                        <div class="session-info">
                            <h4>Meta - Product Manager</h4>
                            <p>Case Study Preparation</p>
                        </div>
                        <button class="session-btn outline">Schedule</button>
                    </div>
                </div>
            </div>

            <!-- Skills Radar -->
            <div class="card skills-card">
                <div class="card-header">
                    <h2>Skills Assessment</h2>
                    <button class="icon-btn">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="1"/>
                            <circle cx="12" cy="5" r="1"/>
                            <circle cx="12" cy="19" r="1"/>
                        </svg>
                    </button>
                </div>
                <div class="skills-chart">
                    <canvas id="skillsRadar"></canvas>
                </div>
                <div class="skills-list">
                    <div class="skill-item">
                        <span class="skill-name">Communication</span>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 85%;"></div>
                        </div>
                        <span class="skill-value">85%</span>
                    </div>
                    <div class="skill-item">
                        <span class="skill-name">Technical Knowledge</span>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 92%;"></div>
                        </div>
                        <span class="skill-value">92%</span>
                    </div>
                    <div class="skill-item">
                        <span class="skill-name">Problem Solving</span>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 78%;"></div>
                        </div>
                        <span class="skill-value">78%</span>
                    </div>
                    <div class="skill-item">
                        <span class="skill-name">Leadership</span>
                        <div class="skill-bar">
                            <div class="skill-progress" style="width: 70%;"></div>
                        </div>
                        <span class="skill-value">70%</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Quick Actions -->
        <div class="quick-actions">
            <h2>Quick Actions</h2>
            <div class="actions-grid">
                <button class="action-card">
                    <div class="action-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polygon points="5 3 19 12 5 21 5 3"/>
                        </svg>
                    </div>
                    <span>Start Practice</span>
                </button>
                <button class="action-card">
                    <div class="action-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2v20m10-10H2"/>
                        </svg>
                    </div>
                    <span>Schedule Session</span>
                </button>
                <button class="action-card">
                    <div class="action-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                            <polyline points="14 2 14 8 20 8"/>
                        </svg>
                    </div>
                    <span>View Reports</span>
                </button>
                <button class="action-card">
                    <div class="action-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="11" cy="11" r="8"/>
                            <path d="m21 21-4.35-4.35"/>
                        </svg>
                    </div>
                    <span>Browse Resources</span>
                </button>
            </div>
        </div>
    </main>

    <script>
        // Sidebar toggle for mobile
        const sidebar = document.querySelector('.sidebar');
        const toggleBtn = document.createElement('button');
        toggleBtn.className = 'sidebar-toggle';
        toggleBtn.innerHTML = '<svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="3" y1="12" x2="21" y2="12"/><line x1="3" y1="6" x2="21" y2="6"/><line x1="3" y1="18" x2="21" y2="18"/></svg>';
        document.body.appendChild(toggleBtn);

        toggleBtn.addEventListener('click', () => {
            sidebar.classList.toggle('active');
        });

        // Mock chart initialization (you would use Chart.js or similar in production)
        console.log('Dashboard loaded - Charts would be initialized here');
    </script>
</body>
</html>