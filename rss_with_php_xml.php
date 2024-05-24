<?php
// Database connection
$mysqli = mysqli_connect('localhost', 'root', '', 'phpnewsfeed'); if (mysqli_connect_errno()) {
exit('Failed to connect to database: ' . mysqli_connect_error());
}
// Fetch news from database
$result = mysqli_query($mysqli, "SELECT title, description, url_link, published_date FROM news ORDER BY published_date DESC");
// Generate RSS feed
header('Content-Type: application/rss+xml; charset=utf-8'); echo "<?xml version='1.0' encoding='UTF-8' ?>";
echo "<rss version='2.0'>"; echo "<channel>";
echo "<title>My News Feed</title>";
echo "<link>http://www.mynewswebsite.com/</link>";
echo "<description>The latest news from My News Website</description>"; while ($row = mysqli_fetch_assoc($result)) {
echo "<item>";
echo "<title>" . htmlspecialchars($row['title']) . "</title>"; echo "<link>" . htmlspecialchars($row['url_link']) . "</link>";
echo "<description>" . htmlspecialchars($row['description']) . "</description>";
echo "<pubDate>" . date(DATE_RSS, strtotime($row['published_date'])) . "</pubDate>"; echo "</item>";
}
echo "</channel>"; echo "</rss>"; mysqli_close($mysqli);
?>
