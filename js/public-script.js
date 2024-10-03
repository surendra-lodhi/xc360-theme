/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

jQuery( document ).ready( function($) {

    //START : Blog page - loadmore posts
    const loadMoreButton = $('#loadmore_blog a');
    let hiddenPosts = $('.news-card.hidden-blog');
    let postsToShow = 2; // Number of posts to reveal each time

    loadMoreButton.on('click', function(e) {
        e.preventDefault();

        // Show the hidden posts in increments
        hiddenPosts.slice(0, postsToShow).removeClass('hidden-blog');

        // Update hiddenPosts after showing some
        hiddenPosts = $('.news-card.hidden-blog');
          loadMoreButton.blur(); // Removes focus from the button
        // If no more hidden posts, hide the Load More button
        if (hiddenPosts.length === 0) {
            loadMoreButton.hide();
        }
    });

    $('#post-categories li').click(function() {
        var category = $(this).data('category');
        var url = new URL(window.location.href);

        // Update URL without reloading the page
        if (category) {
            url.searchParams.set('category', category);
        } else {
            url.searchParams.delete('category');
        }

        // Reload page with the updated URL
        window.location.href = url.href;
    });

    $('.hero-content').parents('.inner-hero-section').addClass('height-auto');
});
