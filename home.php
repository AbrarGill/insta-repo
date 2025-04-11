<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inst</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background: linear-gradient(145deg, #f7f7f7, #e2e2e2);
            font-family: 'Roboto', sans-serif;
            color: #333;
            margin: 0;
            padding: 0;
        }

        #homeContainer {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: flex-start;
            padding: 40px 15px;
            min-height: 100vh;
            background-color: #f4f4f9;
        }

        .upload-section, .post {
            background: #ffffff;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 600px;
            margin-bottom: 30px;
            text-align: center;
            color: #333;
        }

        .upload-section h4 {
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .upload-section input[type="file"],
        .upload-section input[type="text"] {
            border-radius: 8px;
            border: 1px solid #ddd;
            padding: 12px;
            width: 100%;
            margin-bottom: 20px;
            background: #f7f7f7;
            color: #333;
        }

        .upload-section button {
            background-color: #6c757d;
            color: white;
            border-radius: 25px;
            border: none;
            padding: 12px 30px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .upload-section button:hover {
            background-color: #495057;
        }

        .post img, .post video {
            width: 100%;
            border-radius: 10px;
            transition: transform 0.3s ease-in-out;
        }

        .post img:hover, .post video:hover {
            transform: scale(1.05);
        }

        .post-content {
            margin-top: 15px;
        }

        .post-content p {
            font-size: 1rem;
            line-height: 1.5;
            color: #555;
        }

        .post-content button {
            margin-top: 10px;
            padding: 12px 20px;
            border-radius: 30px;
            border: none;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .like-btn {
            background-color: #ff6347;
            color: white;
        }

        .like-btn:hover {
            background-color: #ff4500;
        }

        .comment-btn {
            background-color: #1e90ff;
            color: white;
        }

        .comment-btn:hover {
            background-color: #007bff;
        }

        .logout-button {
            position: fixed;
            top: 20px;
            right: 20px;
            background-color: #ff6347;
            color: white;
            padding: 12px 30px;
            border: none;
            border-radius: 30px;
            font-size: 16px;
            cursor: pointer;
            font-weight: 600;
            transition: background-color 0.3s;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
        }

        .logout-button:hover {
            background-color: #ff4500;
        }

        .comment-section {
            display: none;
            margin-top: 10px;
            text-align: left;
        }

        .comment-section input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border-radius: 8px;
            border: 1px solid #ddd;
            background-color: #f7f7f7;
            color: #333;
        }

        .comment {
            background-color: #f0f0f0;
            padding: 8px;
            border-radius: 8px;
            margin-top: 5px;
        }

        .comment-section .comments {
            margin-top: 10px;
        }
    </style>
</head>

<body>

    <button class="logout-button" onclick="logout()">Logout</button>

    <div id="homeContainer">
        <div class="upload-section">
            <h4>Create a New Post</h4>
            <input type="file" id="mediaInput" accept="image/*,video/*" class="form-control mb-2">
            <input type="text" id="captionInput" placeholder="Add a caption..." class="form-control mb-2">
            <button onclick="addPost()">Post</button>
        </div>

        <div id="postContainer"></div>
    </div>

    <script>
        function addPost() {
            const fileInput = document.getElementById('mediaInput');
            const caption = document.getElementById('captionInput').value;
            const postContainer = document.getElementById('postContainer');

            if (fileInput.files.length > 0) {
                const file = fileInput.files[0];
                const postDiv = document.createElement('div');
                postDiv.classList.add('post');

                // Check if the file is an image or video and render accordingly
                if (file.type.startsWith('image/')) {
                    postDiv.innerHTML = `
                        <img src="${URL.createObjectURL(file)}" alt="Post Image">
                        <div class="post-content">
                            <p>${caption}</p>
                            <button class="like-btn" onclick="likePost(this)">❤️ Like</button>
                            <button class="comment-btn" onclick="toggleCommentSection(this)">💬 Comment</button>
                            <div class="comment-section">
                                <input type="text" placeholder="Write a comment..." onkeypress="addComment(event, this)">
                                <div class="comments"></div>
                            </div>
                        </div>
                    `;
                } else if (file.type.startsWith('video/')) {
                    postDiv.innerHTML = `
                        <video controls>
                            <source src="${URL.createObjectURL(file)}" type="${file.type}">
                            Your browser does not support the video tag.
                        </video>
                        <div class="post-content">
                            <p>${caption}</p>
                            <button class="like-btn" onclick="likePost(this)">❤️ Like</button>
                            <button class="comment-btn" onclick="toggleCommentSection(this)">💬 Comment</button>
                            <div class="comment-section">
                                <input type="text" placeholder="Write a comment..." onkeypress="addComment(event, this)">
                                <div class="comments"></div>
                            </div>
                        </div>
                    `;
                }
                postContainer.appendChild(postDiv);
                fileInput.value = '';
                document.getElementById('captionInput').value = '';
            }
        }

        function likePost(button) {
            button.textContent = button.textContent.includes('Liked') ? '❤️ Like' : '🔥 Liked';
            button.style.backgroundColor = button.textContent.includes('Liked') ? '#ff6347' : '#ff4500';
        }

        function toggleCommentSection(button) {
            const commentSection = button.nextElementSibling;
            commentSection.style.display = commentSection.style.display === 'none' ? 'block' : 'none';
        }

        function addComment(event, input) {
            if (event.key === 'Enter' && input.value.trim() !== '') {
                const commentDiv = document.createElement('div');
                commentDiv.textContent = input.value;
                commentDiv.classList.add('comment');
                input.nextElementSibling.appendChild(commentDiv);
                input.value = '';
            }
        }

        function logout() {
            window.location.href = 'login.php';
        }
    </script>
</body>

</html>
