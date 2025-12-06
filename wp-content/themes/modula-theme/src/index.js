/**
 * WordPress dependencies
 */
import { __ } from '@wordpress/i18n';
import { registerBlockType } from '@wordpress/blocks';
import { useBlockProps } from '@wordpress/block-editor';

/**
 * Internal dependencies
 */
import './styles/editor.scss';
import './styles/style.scss';

// Register custom blocks
const registerModulaBlocks = () => {
  // Example custom block
  registerBlockType('modula/example-block', {
    title: __('Example Block', 'modula'),
    icon: 'smiley',
    category: 'layout',
    edit: () => {
      const blockProps = useBlockProps();
      return (
        <div {...blockProps}>
          {__('Hello from the editor!', 'modula')}
        </div>
      );
    },
    save: () => {
      const blockProps = useBlockProps.save();
      return (
        <div {...blockProps}>
          {__('Hello from the frontend!', 'modula')}
        </div>
      );
    },
  });
};

// Initialize when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
  registerModulaBlocks();
});

// Initialize in the block editor
if (window.wp && window.wp.domReady) {
  window.wp.domReady(registerModulaBlocks);
}
