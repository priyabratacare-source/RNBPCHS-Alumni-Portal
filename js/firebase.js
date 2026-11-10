
import { initializeApp } from "https://www.gstatic.com/firebasejs/12.0.0/firebase-app.js";

import { getAuth } from "https://www.gstatic.com/firebasejs/12.0.0/firebase-auth.js";

import { getFirestore } from "https://www.gstatic.com/firebasejs/12.0.0/firebase-firestore.js";

import { getStorage } from "https://www.gstatic.com/firebasejs/12.0.0/firebase-storage.js";

// Firebase Configuration

const firebaseConfig = {
    apiKey: "AIzaSyAw-sqteTZyNoBIqHr-NTROz_BMmP6Yh7k",
    authDomain: "rnbpchs-alumni.firebaseapp.com",
    projectId: "rnbpchs-alumni",
    storageBucket: "rnbpchs-alumni.firebasestorage.app",
    messagingSenderId: "187797438854",
    appId: "1:187797438854:web:e6e564e04aea3129fa6c07"
};

// Initialize Firebase

const app = initializeApp(firebaseConfig);

// Firebase Services

const auth = getAuth(app);
const db = getFirestore(app);
const storage = getStorage(app);

// Export Services

export { app, auth, db, storage };
