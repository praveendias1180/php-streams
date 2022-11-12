# Streams

Streams provide on-demand access to data. This means you don’t need to load the entire contents of your dataset into memory before processing can start. Without streams, opening a 20MB file will consume 20MB of memory.

Most installations of PHP are set to use little memory—generally around 64MB. So working with large sets of data presents problems. Using streams allows you to interact with very large files in predictable and efficient ways.

![](book-stream.png)