import React, { useEffect, useState } from 'react'
import axios from "axios"
import Blog from '/Applications/XAMPP/htdocs/wordpress/wp-content/themes/template/my-blog-app/components/blog';

export default function App() {
  const [posts, setPosts] = useState([]);

  const fetchPosts = () => {
    axios
      .get("http://bamboo-brush-art.com/wp-json/wp/v2/posts?_embed")
      .then((res) => {
        setPosts(res.data);
      });
  }

  useEffect(() => {
    fetchPosts()
  }, [])

  return (
    <div>
      {posts.map((item) => (
        <Blog
          post={item}
        />
      ))}
    </div>
  )
}