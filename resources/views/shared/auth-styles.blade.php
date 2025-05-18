<!-- Shared styles for authentication pages -->
<style>
    .auth-container {
        max-width: 500px;
        margin: 2rem auto;
        padding: 2rem;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border-radius: 15px;
        border: 1px solid rgba(255, 255, 255, 0.1);
        box-shadow: 0 8px 32px rgba(0, 0, 0, 0.1);
    }

    .auth-title {
        color: var(--primary-color);
        font-family: 'Montserrat', sans-serif;
        font-size: 2rem;
        font-weight: 700;
        text-align: center;
        margin-bottom: 2rem;
        text-transform: uppercase;
        letter-spacing: 1px;
    }

    .auth-form {
        display: flex;
        flex-direction: column;
        gap: 1.5rem;
    }

    .form-group {
        position: relative;
    }

    .form-label {
        color: rgba(255, 255, 255, 0.9);
        font-weight: 500;
        margin-bottom: 0.5rem;
        font-size: 0.9rem;
        letter-spacing: 0.5px;
    }

    .form-control {
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 8px;
        padding: 0.75rem 1rem 0.75rem 2.5rem;
        color: white;
        transition: all 0.3s ease;
    }

    .form-control:focus {
        background: rgba(255, 255, 255, 0.15);
        border-color: var(--primary-color);
        box-shadow: 0 0 0 2px rgba(0, 210, 91, 0.2);
        color: white;
    }

    .form-control::placeholder {
        color: rgba(255, 255, 255, 0.5);
    }

    .form-icon {
        position: absolute;
        left: 1rem;
        top: 2.3rem;
        color: var(--primary-color);
        opacity: 0.8;
    }

    .auth-button {
        background: var(--primary-color);
        color: white;
        border: none;
        padding: 0.75rem 2rem;
        border-radius: 8px;
        font-weight: 600;
        letter-spacing: 0.5px;
        transition: all 0.3s ease;
        margin-top: 1rem;
        width: 100%;
    }

    .auth-button:hover {
        background: #00b94f;
        transform: translateY(-1px);
        box-shadow: 0 4px 12px rgba(0, 210, 91, 0.2);
    }

    .auth-alert {
        background: rgba(220, 53, 69, 0.1);
        color: #ff4444;
        border: 1px solid rgba(220, 53, 69, 0.2);
        border-radius: 8px;
        padding: 1rem;
        margin-bottom: 1.5rem;
        backdrop-filter: blur(5px);
    }

    .auth-link {
        color: var(--primary-color);
        text-decoration: none;
        font-size: 0.9rem;
        transition: all 0.3s ease;
    }

    .auth-link:hover {
        color: #00b94f;
        text-decoration: underline;
    }
</style> 